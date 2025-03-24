<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokter')->insert([
            [
                'id'                   =>  mt_rand(100000, 999999),
                'status'               => 'online',
                'role_id'              => 2,
                'nama_lengkap'         => 'Farrel Yassar',
                'tanggal_lahir'        => '2007-03-26',
                'jenis_kelamin'        => 'Pria',
                'alamat'               => 'Jl. Gadang',
                'email'                => 'farrelyassar.k@gmail.com',
                'no_telp'              => '08970876646',
                'password'             => '123123',
                'foto_profil'          => 'dokter\foto_profil\default.jpg',
                'foto_wajah'           => 'dokter\foto_wajah\default.jpg',
                'foto_ktp'             => 'dokter\foto_ktp\default.jpg',
                'jenis_dokter'         => 'Psikolog',
                'foto_ijazah'          => 'dokter\foto_ijazah\default.jpg',
                'foto_strpk'           => 'dokter\foto_strpk\default.jpg',
                'no_strpk'             => '123123',
                'foto_sippk'           => 'dokter\foto_sippk\default.jpg',
                'no_sippk'             => '123123',
                'harga_layanan'        => 75000,
                'status_validasi_data' => 'approved',
            ]
        ]);
    }
}
