<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\RekamBobot;
use App\Models\RiwayatPenyakit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         // Total Sapi & Kambing
         $total_sapi = Hewan::where('jenis_hewan', 'sapi')->count();
         $total_kambing = Hewan::where('jenis_hewan', 'kambing')->count();
         
         // Jumlah hewan sakit
         $sapi_sakit = RiwayatPenyakit::whereHas('hewan', function ($query) {
             $query->where('jenis_hewan', 'sapi');
         })->whereNull('sembuh')->count();
         
         $kambing_sakit = RiwayatPenyakit::whereHas('hewan', function ($query) {
             $query->where('jenis_hewan', 'kambing');
         })->whereNull('sembuh')->count();
         
 
         // Detail kategori untuk chart
         $sapi_fattening = Hewan::where('jenis_hewan', 'sapi')->where('kategori', 'fattening')->count();
         $sapi_breeding = Hewan::where('jenis_hewan', 'sapi')->where('kategori', 'breeding')->count();
         $sapi_anakan = Hewan::where('jenis_hewan', 'sapi')->where('kategori', 'anakan')->count();
 
         $kambing_fattening = Hewan::where('jenis_hewan', 'kambing')->where('kategori', 'fattening')->count();
         $kambing_breeding = Hewan::where('jenis_hewan', 'kambing')->where('kategori', 'breeding')->count();
         $kambing_anakan = Hewan::where('jenis_hewan', 'kambing')->where('kategori', 'anakan')->count();
 
         // Riwayat Rekam Bobot terbaru (misalnya 10 data terakhir)
         $rekam_bobot = RekamBobot::with(['user', 'hewan'])->latest()->take(10)->get();
 
         return view('admin.dashboard.index', compact(
             'total_sapi',
             'total_kambing',
             'sapi_sakit',
             'kambing_sakit',
             'sapi_fattening',
             'sapi_breeding',
             'sapi_anakan',
             'kambing_fattening',
             'kambing_breeding',
             'kambing_anakan',
             'rekam_bobot'
         ));
    }
}
