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
        $hewan = [
            // Sapi
            [
                'nama_hewan' => 'Sapi A',
                'jenis_hewan' => 'Sapi',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '2024-01-10',
                'keterangan' => 'Sapi fattening',
                'kategori' => 'Fattening',
            ],
            [
                'nama_hewan' => 'Sapi B',
                'jenis_hewan' => 'Sapi',
                'jenis_kelamin' => 'P',
                'tanggal_lahir' => '2023-11-05',
                'keterangan' => 'Sapi breeding',
                'kategori' => 'Breeding'
            ],
            [
                'nama_hewan' => 'Sapi C',
                'jenis_hewan' => 'Sapi',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '2024-04-20',
                'keterangan' => 'Anakan sapi',
                'kategori' => 'Anakan'
            ],

            // Kambing
            [
                'nama_hewan' => 'Kambing A',
                'jenis_hewan' => 'Kambing',
                'jenis_kelamin' => 'P',
                'tanggal_lahir' => '2024-02-14',
                'keterangan' => 'Kambing fattening',
                'kategori' => 'Fattening'
            ],
            [
                'nama_hewan' => 'Kambing B',
                'jenis_hewan' => 'Kambing',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '2023-08-18',
                'keterangan' => 'Kambing breeding',
                'kategori' => 'Breeding'
            ],
            [
                'nama_hewan' => 'Kambing C',
                'jenis_hewan' => 'Kambing',
                'jenis_kelamin' => 'P',
                'tanggal_lahir' => '2024-05-05',
                'keterangan' => 'Anakan kambing',
                'kategori' => 'Anakan'
            ],
        ];

        foreach ($hewan as $data) {
            Hewan::create($data);
        }
    }
}
