<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah Sapi
        $sapi_fattening = Hewan::where('jenis_hewan', 'sapi')->where('kategori', 'fattening')->count();
        $sapi_breeding = Hewan::where('jenis_hewan', 'sapi')->where('kategori', 'breeding')->count();
        $sapi_anakan = Hewan::where('jenis_hewan', 'sapi')->where('kategori', 'anakan')->count();

        // Hitung jumlah Kambing
        $kambing_fattening = Hewan::where('jenis_hewan', 'kambing')->where('kategori', 'fattening')->count();
        $kambing_breeding = Hewan::where('jenis_hewan', 'kambing')->where('kategori', 'breeding')->count();
        $kambing_anakan = Hewan::where('jenis_hewan', 'kambing')->where('kategori', 'anakan')->count();

        // Siapkan data untuk tabel
        $hewanData = [
            [
                'jenis_hewan' => 'Sapi',
                'fattening' => $sapi_fattening,
                'breeding' => $sapi_breeding,
                'anakan' => $sapi_anakan,
            ],
            [
                'jenis_hewan' => 'Kambing',
                'fattening' => $kambing_fattening,
                'breeding' => $kambing_breeding,
                'anakan' => $kambing_anakan,
            ],
        ];

        return view('admin.dashboard.index', compact(
            'sapi_fattening',
            'sapi_breeding',
            'sapi_anakan',
            'kambing_fattening',
            'kambing_breeding',
            'kambing_anakan',
            'hewanData'
        ));
    }
}
