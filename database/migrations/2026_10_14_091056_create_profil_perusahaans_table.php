<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('profil_perusahaans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_perusahaan');
        $table->string('tahun_berdiri')->nullable(); // <-- TAMBAHKAN BARIS INI
        $table->string('tagline')->nullable();
        $table->text('tentang');
        $table->text('visi');
        $table->text('misi');
        $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_perusahaans');
    }
};