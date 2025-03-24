<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class PembayaranController extends Controller
{
    public function createPembayaran(Pembayaran $pembayaran)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isProduction = config('midtrans.is_production');

        $user = User::find($pembayaran->id_user);
        $dokter = Dokter::find($pembayaran->id_dokter);

        // DETAIL TRANSAKSI
        $detailTransaksi = [
            'order_id'      => $pembayaran->id,
            'gross_amount'  => $pembayaran->harga_total,

        ];

        $detailCustomer = [
            'first_name'    => $user->nama_lengkap,
            'email'         => $user->email,
            'phone'         => $user->no_telp,
        ];

        $items = [
            'id'        => $dokter->id,
            'price'     => $dokter->harga_layanan,
            'quantity'  => 1,
            'name'      => 'Konsultasi' . $dokter->jenis_dokter,
        ];

        $params = [
            'transaction_details'   => $detailTransaksi,
            'customer_details'      => $detailCustomer,
            'item_details'      => $items,
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return view('client.pasien.konsultasi.pembayaran.checkout', [
                'snapToken' => $snapToken,
                'pembayaran' => $pembayaran,
                'user' => $user,
                'dokter' => $dokter
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
