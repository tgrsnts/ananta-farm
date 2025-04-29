<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $table = 'katalog';
    protected $primaryKey = 'id_katalog';
    protected $guarded = ['id_katalog'];
}
