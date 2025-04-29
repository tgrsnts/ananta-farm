<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerlakuanPenyakit extends Model
{
    protected $table = 'perlakuan_penyakit';
    protected $primaryKey = 'id_perlakuan_penyakit';
    protected $guarded = ['id_perlakuan_penyakit'];
}
