<?php

namespace App\Models;

use App\Models\User;
use App\Models\Hewan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RekamBobot extends Model
{
    protected $table = 'rekam_bobot';
    protected $primaryKey = 'id_rekamBobot';
    protected $fillable = [
        'hewan_id',
        'user_id',
        'bobot',
        'tanggal'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }
    public function hewan(): BelongsTo
    {
        return $this->belongsTo(Hewan::class, 'user_id', 'id_user');
    }

}
