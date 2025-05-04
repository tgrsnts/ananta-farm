<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatPenyakit extends Model
{
    protected $table = 'riwayat_penyakit';
    protected $primaryKey = 'id_riwayat_penyakit';
    protected $guarded = ['id_riwayat_penyakit'];
    protected $fillable = [
        'hewan_id',
        'awal_sakit',
        'sembuh',
        'nama_penyakit'
    ];

    public function hewan(): BelongsTo
    {
        return $this->belongsTo(Hewan::class, 'hewan_id', 'id_hewan');
    }

    public function perlakuan(): HasMany
    {
        return $this->hasMany(PerlakuanPenyakit::class, 'riwayat_penyakit_id', 'id_riwayat_penyakit');
    }
}
