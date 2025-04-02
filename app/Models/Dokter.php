<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Authenticatable
{

    protected $table = 'dokter';


    protected $fillable = [
        'id',
        'nama_lengkap',
        'role_id',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'email',
        'no_telp',
        'password',
        'foto_profil',
        'foto_wajah',
        'foto_ktp',
        'jenis_dokter',
        'foto_ijazah',
        'foto_strpk',
        'no_strpk',
        'foto_sippk',
        'no_sippk',
        'status_validasi_data',
        'harga_layanan'
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
