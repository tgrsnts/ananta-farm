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
        Schema::create('daftar_magang', function (Blueprint $table) {
            $table->id('id_daftar_magang');
            $table->string('nama');
            $table->string('nim');
            $table->string('email');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('instansi');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('angkatan');
            $table->string('nomor_whatsapp');
            $table->string('penyakit');
            $table->string('kegiatan');
            $table->string('kunjungan_peternakan');
            $table->boolean('pernah_magang');
            $table->string('referal');
            $table->string('alasan');
            $table->string('instagram');
            $table->boolean('punya_kendaraan');
            $table->boolean('bisa_nyetir');
            $table->string('cv')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_magang');
    }
};
