<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Midtrans\Config;
use Midtrans\Snap;

class PembayaranController extends Controller
{
    // 1️⃣ Buat transaksi dulu sebelum masuk ke halaman pembayaran
    public function createTransaction(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|exists:dokter,id'
        ]);

        $user = Auth::user();
        $dokter = Dokter::findOrFail($request->id_dokter);

        // Buat transaksi di database
        $pembayaran = Pembayaran::create([
            'id_user'           => $user->id,
            'id_dokter'         => $dokter->id,
            'harga_total'       => $dokter->harga_layanan,
            'waktu_konsultasi'  => Carbon::now()->toDateString(),
            'mulai_konsultasi'  => Carbon::now()->format('H:i:s'),
            'akhir_konsultasi'  => Carbon::now()->addHour()->format('H:i:s'),
            'status'            => 'pending',
        ]);

        // Setelah transaksi dibuat, arahkan ke halaman informasi pembayaran
        return redirect()->route('checkout', ['id' => $pembayaran->id]);
    }

    // 2️⃣ Menampilkan halaman informasi pembayaran
    public function showCheckoutForm($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $dokter = Dokter::findOrFail($pembayaran->id_dokter);
        $user = Auth::user();

        return view('client.pasien.konsultasi.pembayaran.checkout', compact('dokter', 'user', 'pembayaran'));
    }

    // 3️⃣ Memproses pembayaran dengan Midtrans
    public function prosesPembayaran(Request $request)
    {
        $request->validate([
            'id_pembayaran' => 'required|exists:pembayaran,id'
        ]);

        $pembayaran = Pembayaran::findOrFail($request->id_pembayaran);
        $dokter = Dokter::findOrFail($pembayaran->id_dokter);
        $user = Auth::user();

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Detail transaksi Midtrans
        $params = [
            'transaction_details' => [
                'order_id'      => 'ORDER-' . $pembayaran->id,
                'gross_amount'  => $pembayaran->harga_total,
            ],
            'customer_details' => [
                'first_name' => $user->nama_lengkap,
                'email'      => $user->email,
                'phone'      => $user->no_telp,
            ],
            'item_details' => [
                [
                    'id'        => $dokter->id,
                    'price'     => $dokter->harga_layanan,
                    'quantity'  => 1,
                    'name'      => 'Konsultasi dengan ' . $dokter->jenis_dokter,
                ],
            ],
        ];

        // Dapatkan Snap Token Midtrans
        $snapToken = Snap::getSnapToken($params);
        $pembayaran->snap_token = $snapToken;
        $pembayaran->save();

        return response()->json(['snap_token' => $snapToken]);
    }
}
