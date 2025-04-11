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
    protected $guarded = [
        'id_kandang'
    ];
    protected $appends = ['sapi', 'kambing'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'kandang_id', 'id_kandang');
    }

    public function hewan(): HasMany
    {
        return $this->hasMany(Hewan::class, 'kandang_id', 'id_kandang');
    }

    public function getSapiAttribute()
    {
        return $this->hewan()->where('jenis_hewan', 'sapi')->count();
    }

    public function getKambingAttribute()
    {
        return $this->hewan()->where('jenis_hewan', 'kambing')->count();
    }
}
