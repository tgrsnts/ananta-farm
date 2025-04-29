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
        Schema::create('perlakuan_penyakit', function (Blueprint $table) {
            $table->id('id_perlakuan_penyakit');
            $table->foreignId('riwayat_penyakit_id')
                ->constrained('riwayat_penyakit', 'id_riwayat_penyakit')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('perlakuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
