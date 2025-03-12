<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokter', function (Blueprint $table) {
            // BIODATA DOKTER
            $table->id();
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('no_telp', 20);
            $table->string('password');
            $table->string('foto_profil');
            $table->string('foto_wajah');
            $table->string('foto_ktp');
            $table->enum('jenis_dokter', ['Psikolog', 'Psikiater']);

            // DOKUMEN KEDOKTERAN
            $table->string('foto_ijazah');
            $table->string('foto_strpk');
            $table->string('no_strpk')->unique();
            $table->string('foto_sippk');
            $table->string('no_sippk')->unique();
            $table->timestamps();

            // STATUS VALIDASI DATA
            $table->string('status_validasi_data')->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
