<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerlakuanPenyakit extends Model
{
    protected $table = 'perlakuan_penyakit';
    protected $primaryKey = 'id_perlakuan_penyakit';
    protected $guarded = ['id_perlakuan_penyakit'];
    protected $fillable =[
        'riwayat_penyakit_id',
        'perlakuan'
    ];

    public function riwayat(): BelongsTo
    {
        return $this->belongsTo(RiwayatPenyakit::class, 'riwayat_penyakit_id', 'id_riwayat_penyakit');
    }
}
