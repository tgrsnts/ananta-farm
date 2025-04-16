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
            'nama' => 'Mochamad Tegar',
            'nim' => '1234567890',
            'jenis_kelamin' => 'L',
            'instansi' => 'Politeknik Negeri Jakarta',
            'jurusan' => 'Teknik Informatika',
            'semester' => 6,
            'angkatan' => 2022,
            'nomor_whatsapp' => '+6281234567890',
            'penyakit' => 'Tidak ada',
            'kegiatan' => 'Membantu pengelolaan kandang dan dokumentasi',
            'kunjungan_peternakan' => 'Pernah',
            'pernah_magang' => 'Belum',
            'referal' => 'Instagram',
            'alasan' => 'Ingin belajar langsung di lapangan',
            'instagram' => '@tegar.magang',
            'punya_kendaraan' => 'Ya',
            'bisa_nyetir' => 'Ya',
            'cv' => null, // atau isi dengan path file jika perlu
        ]);
    }
}
