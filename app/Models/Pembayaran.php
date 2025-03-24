<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{

    protected $table = 'pembayaran';

    protected $fillable = [
        'id_user',
        'id_dokter',
        'waktu_transaksi',
        'mulai_konsultasi',
        'akhir_konsultasi',
        'harga_total',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
