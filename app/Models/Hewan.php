<?php

namespace App\Models;

use App\Models\RekamBobot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Hewan extends Model
{
    protected $table = 'hewan';
    protected $primaryKey = 'id_hewan';
    // protected $fillable = [
    //     'kandang_id',
    //     'jenis_hewan',
    //     'tanggal_lahir',
    //     'jenis_kelamin',
    //     'foto',
    //     'keterangan'
    // ];
    protected $guarded = ['id_hewan'];

    public function rekam_bobot(): HasMany
    {
        return $this->hasMany(RekamBobot::class, 'hewan_id', 'id_hewan');
    }

    public function riwayat_penyakit(): HasMany
    {
        return $this->hasMany(RiwayatPenyakit::class, 'hewan_id', 'id_hewan');
    }
}
