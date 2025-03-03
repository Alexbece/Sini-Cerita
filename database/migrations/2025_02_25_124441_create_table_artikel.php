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
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('id_artikel');
            $table->string('title_artikel');
            $table->longText('content');
            $table->enum('category_artikel', ['Burnout', 'Gangguan Mood', 'Depresi', 'Keluarga & Hubungan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
