<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{

    protected $table = 'pembayaran';

    protected $fillable = ['user_id', 'dokter_id', 'subtotal', 'id_midtrans', 'status'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
