<?php

namespace App\Http\Controllers\Pembayaran;

use Carbon\Carbon;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Dokter;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PembayaranController extends Controller
{
    public function prosesPembayaran(Request $request)
    {
        $user = auth()->user();
        $dokter = Dokter::findOrFail($request->dokter_id);

        // Buat data pembayaran dengan status "pending"
        $pembayaran = Pembayaran::create([
            'user_id' => $user->id,
            'dokter_id' => $dokter->id,
            'subtotal' => $dokter->harga_layanan,
            'status' => 'pending',
        ]);

        // Konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderId = 'ORDER-' . $pembayaran->id . '-' . time(); // kasih time biar unik
        $pembayaran->update(['id_midtrans' => $orderId]);
        // Buat transaksi di Midtrans
        $params = [

            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $dokter->harga_layanan,
            ],
            'customer_details' => [
                'first_name' => $user->nama_lengkap,
                'email' => $user->email,
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function checkout($dokter_id)
    {
        // Ambil data dokter
        $dokter = Dokter::findOrFail($dokter_id);
        $user = auth()->user();

        // Kirim data ke view
        return view('client.pasien.konsultasi.pembayaran.checkout', compact('dokter', 'user'));
    }

    public function midtransCallback(Request $request)
    {
        Log::info('Midtrans Callback: ' . $request->getContent());

        $notif = json_decode($request->getContent());

        $pembayaran = Pembayaran::where('id_midtrans', $notif->order_id)->first();

        if (!$pembayaran) {
            return response()->json(['message' => 'Pembayaran tidak ditemukan'], 404);
        }

        // Periksa status pembayaran dari Midtrans
        if ($notif->transaction_status == 'settlement') {
            $pembayaran->update(['status' => 'paid']);

            $dokter = Dokter::find($pembayaran->dokter_id);
            if ($dokter) {
                Log::info('Dokter ditemukan. ID: ' . $dokter->id);
                $dokter->saldo_dokter += $pembayaran->subtotal;
                $dokter->status = 'sibuk'; // update status ke sibuk
                $dokter->save();

                if ($dokter->email) {
                    Mail::to($dokter->email)->send(new \App\Mail\PembayaranDiterimaDokterMail($pembayaran));
                    if (count(Mail::failures()) > 0) {
                        Log::error('Email gagal dikirim ke dokter: ' . $dokter->email);
                    } else {
                        Log::info('Email berhasil dikirim ke dokter: ' . $dokter->email);
                    }
                }
            } else {
                Log::warning('Dokter tidak ditemukan untuk pembayaran ID ' . $pembayaran->id);
            }
        } elseif ($notif->transaction_status == 'pending') {
            $pembayaran->update(['status' => 'pending']);
        } elseif ($notif->transaction_status == 'expire' || $notif->transaction_status == 'cancel') {
            $pembayaran->update(['status' => 'cancelled']);
        }

        return response()->json(['message' => 'Status pembayaran diperbarui']);
    }
}
