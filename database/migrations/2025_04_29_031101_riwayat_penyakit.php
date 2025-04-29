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
        Schema::create('riwayat_penyakit', function (Blueprint $table) {
            $table->id('id_riwayat_penyakit');
            $table->foreignId('hewan_id')
                ->constrained('hewan', 'id_hewan')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->date('awal_sakit');
            $table->date('sembuh');
            $table->string('nama_penyakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_penyakit');
    }
};
