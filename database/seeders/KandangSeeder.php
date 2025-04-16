<?php

namespace Database\Seeders;

use App\Models\Kandang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KandangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kandang::create([
            "nama_kandang" => "Kandang A",
            "latitude" => -6.7833520,
            "longitude" => 106.7023680
        ]);
    }
}
