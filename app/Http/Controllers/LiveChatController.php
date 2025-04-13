<?php

namespace App\Http\Controllers;

use App\Events\SessionEnded;
use App\Models\SesiChat;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiveChatController extends Controller
{
    /**
     * Menangani akses user ke sesi live chat setelah pembayaran berhasil.
     */
    public function start(Request $request, $pembayaranId)
    {
        $pembayaran = Pembayaran::with(['user', 'dokter'])->findOrFail($pembayaranId);

        if (Auth::id() !== $pembayaran->user_id) {
            abort(403, 'Anda tidak memiliki akses ke sesi ini.');
        }

        if ($pembayaran->status !== 'paid') {
            return redirect()->route('app-index')->with('error', 'Pembayaran belum selesai!');
        }

        // Buat sesi chat jika belum ada (status aktif)
        $chat = SesiChat::firstOrCreate([
            'user_id' => $pembayaran->user_id,
            'dokter_id' => $pembayaran->dokter_id,
            'status' => 'aktif',
        ], [
            'waktu_mulai' => now(),
            'waktu_berakhir' => now()->addHour(),
        ]);

        // ✅ Ambil semua pesan dari sesi aktif ini
        $messages = $chat->messages()->orderBy('created_at')->get();

        // ✅ Ambil riwayat sesi chat sebelumnya yang sudah selesai
        $riwayatChats = SesiChat::with('messages')
            ->where('user_id', $pembayaran->user_id)
            ->where('dokter_id', $pembayaran->dokter_id)
            ->where('status', 'selesai')
            ->orderByDesc('waktu_mulai')
            ->get();

        return view('client.pasien.livechat.index', [
            'chat' => $chat,
            'user' => $pembayaran->user,
            'dokter' => $pembayaran->dokter,
            'messages' => $messages,
            'riwayatChats' => $riwayatChats, // ⬅ bisa digunakan di view untuk tampilkan histori chat
        ]);
    }

    /**
     * Dokter mengakses sesi live chat yang sedang berlangsung.
     */
    public function accessByDokter($chatId)
    {
        $chat = SesiChat::with(['user', 'dokter'])->findOrFail($chatId);
        $dokter = Auth::guard('dokter')->user();

        if (!$dokter || $dokter->id !== $chat->dokter_id) {
            abort(403, 'Akses tidak sah');
        }

        $messages = \App\Models\ChatMessage::where('sesi_chat_id', $chat->id)
            ->orderBy('created_at')
            ->get();

        return view('client.pasien.livechat.index', [
            'chat' => $chat,
            'user' => $chat->user,
            'dokter' => $dokter,
            'messages' => $messages,
        ]);
    }

    /**
     * Dokter mengakhiri sesi live chat.
     */
    public function endSession(Request $request, $chatId)
    {
        $chat = SesiChat::findOrFail($chatId);

        $dokter = Auth::guard('dokter')->user();
        $user = Auth::user();

        if (($dokter && $chat->dokter_id === $dokter->id) || ($user && $chat->user_id === $user->id)) {
            $chat->update([
                'status' => 'selesai',
                'waktu_berakhir' => now(),
            ]);

            broadcast(new SessionEnded($chat->user_id, $chat->dokter_id));

            if ($dokter) {
                return redirect()->route('dokter.dashboard')->with('success', 'Sesi live chat telah diakhiri.');
            }

            if ($user) {
                return redirect()->route('dashboard')->with('success', 'Sesi live chat telah diakhiri.');
            }
        }

        abort(403, 'Akses tidak sah');
    }
}
