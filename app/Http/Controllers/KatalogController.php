<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $katalog = Katalog::get();
        return view('admin.katalog.index', ['katalog' => $katalog]);
    }
}
