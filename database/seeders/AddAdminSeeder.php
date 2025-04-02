<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'            => mt_rand(100000, 999999),
            'nama_lengkap'  => 'Farrel Yassar Kurniawan',
            'foto_profil'   => 'storage\app\public\user\foto_profil\p6J7SEO74sVyIoYrEepQvTh1ftsOodlKDDr662SV.jpg',
            'no_telp'       => '08907876646',
            'email'         => 'farrelyassar.k@gmail.com',
            'password'      => Hash::make('123123'),
            'role_id'       => 3,
        ]);
    }
}
