<?php

namespace Database\Seeders;

use App\Models\Magang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Magang::create([
            'nama' => 'Tegar Santoso',
            'nim' => '1234567890',
            'email' => 'tegarsantoso@gmail.com',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2023-11-05',
            'instansi' => 'Politeknik Negeri Jakarta',
            'jurusan' => 'Teknik Informatika',
            'semester' => '6',
            'angkatan' => '2022',
            'nomor_whatsapp' => '+6281234567890',
            'penyakit' => 'Tidak ada',
            'kegiatan' => 'Membantu kandang dan dokumentasi',
            'kunjungan_peternakan' => 'Pernah',
            'pernah_magang' => false,
            'referal' => 'Instagram',
            'alasan' => 'Ingin menambah pengalaman',
            'instagram' => 'tgrsnts',
            'punya_kendaraan' => true,
            'bisa_nyetir' => true,
            'cv' => null,
            'status' => 'pending'
        ]);

    }
}
