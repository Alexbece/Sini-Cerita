<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\SesiChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatMessageSent;
use App\Models\Dokter;

class ChatMessageController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'sesi_chat_id' => 'required|exists:sesi_chats,id',
            'message' => 'required|string',
        ]);

        $chat = SesiChat::findOrFail($request->sesi_chat_id);

        // Deteksi siapa pengirimnya (user atau dokter)
        $sender = Auth::guard('dokter')->check() ? 'dokter' : 'user';

        // Ambil ID dari user/dokter berdasarkan sesi
        $userId = $sender === 'user' ? Auth::id() : $chat->user_id;
        $dokterId = $sender === 'dokter' ? Auth::guard('dokter')->id() : $chat->dokter_id;

        // Simpan pesan ke database
        $message = ChatMessage::create([
            'sesi_chat_id' => $chat->id,
            'user_id' => $userId,
            'dokter_id' => $dokterId,
            'message' => $request->message,
            'sender' => $sender,
        ]);

        // Log debug (opsional)
        \Log::info('✅ Pesan baru disimpan', ['pesan' => $message]);

        \Log::info('🎤 Sedang broadcast event', ['channel' => 'chat.' . $message->user_id . '.' . $message->dokter_id]);
        broadcast(new ChatMessageSent($message))->toOthers();

        \Log::info('📡 Pesan dibroadcast ke Pusher');

        return response()->json([
            'status' => 'success',
            'message' => 'Pesan dikirim',
            'data' => $message
        ]);
    }

    public function start($sesi_chat_id)
    {
        $chat = SesiChat::findOrFail($sesi_chat_id);

        if (Auth::id() !== $chat->user_id) {
            abort(403);
        }

        $user = Auth::user();
        $dokter = Dokter::findOrFail($chat->dokter_id);

        // ✅ Ambil semua pesan lama
        $messages = ChatMessage::where('sesi_chat_id', $chat->id)
            ->orderBy('created_at')
            ->get();

        // ⬅ Pastikan $messages dikirim ke view
        return view('client.pasien.livechat.index', compact('chat', 'user', 'dokter', 'messages'));
    }


}
