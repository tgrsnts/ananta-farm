<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $table = 'katalog';
    protected $primaryKey = 'id_katalog';
    protected $fillable = [
        'nama',
        'bobot',
        'harga',
        'jenis',
        'foto'
    ];
    protected $guarded = ['id_katalog'];
}
