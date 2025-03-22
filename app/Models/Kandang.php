<?php

namespace App\Models;

use App\Models\User;
use App\Models\Hewan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kandang extends Model
{
    protected $table = 'kandang';
    protected $primaryKey = 'id_kandang';
    protected $fillable = [
        'nama_kandang'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'kandang_id', 'id_kandang');
    }

    public function hewan(): HasMany
    {
        return $this->hasMany(Hewan::class, 'kandang_id', 'id_kandang');
    }
}
