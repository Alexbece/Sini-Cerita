<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{

    protected $table = 'dokter';


    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'email',
        'no_telp',
        'password',
        'foto_profil',
        'foto_wajah',
        'foto_ktp',
        'foto_strpk',
        'no_strpk',
        'strpk_expired',
        'foto_sippk',
        'no_sippk',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
