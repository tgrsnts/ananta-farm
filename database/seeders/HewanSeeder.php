<?php

namespace Database\Seeders;

use App\Models\Hewan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hewan::create([
            'nama_hewan' => 'Sapy',
            'jenis_hewan' => 'Sapi',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2024-12-21',
            'keterangan' => 'Lorem',
            'kandang_id' => 1
        ]);        
    }
}
