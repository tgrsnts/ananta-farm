<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    protected $table = 'daftar_magang';
    protected $primaryKey = 'id_daftar_magang';
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'tanggal_lahir',
        'jenis_kelamin',
        'instansi',
        'jurusan',
        'semester',
        'angkatan',
        'nomor_whatsapp',
        'penyakit',
        'kegiatan',
        'kunjungan_peternakan',
        'pernah_magang',
        'referal',
        'alasan',
        'instagram',
        'punya_kendaraan',
        'bisa_nyetir',
        'cv',
        'status'
    ];
}
