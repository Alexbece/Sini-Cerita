<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Jalankan seeder ini.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['nama_role' => 'pasien'],
            ['nama_role' => 'dokter'],
            ['nama_role' => 'admin'],
        ]);
    }
}
