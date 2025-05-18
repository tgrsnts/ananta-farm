<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPenyakit;
use App\Models\PerlakuanPenyakit;

class RekamPenyakitController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'awal_sakit' => 'required',
            'nama_penyakit' => 'required'
        ]);
        RiwayatPenyakit::create([
            'hewan_id' => $request->hewan_id,
            'awal_sakit' => $request->awal_sakit,
            'nama_penyakit' => $request->nama_penyakit
        ]);
        return redirect()->back()->with('hewan', 'Penyakit Berhasil Direkam');
    }

    public function sembuh($id){
        $riwayat = RiwayatPenyakit::findOrFail($id);
        $riwayat->update([
            'sembuh' => now()
        ]);
        return redirect()->back()->with('hewan', 'Data Telah Disimpan');
    }

    public function storePerlakuan(Request $request){
        $request->validate([
            'perlakuan' => 'required'
        ]);
        $penyakit = RiwayatPenyakit::findOrFail($request->perlakuan_id);
        if($penyakit->sembuh){
            return redirect()->back()->with('gagal', 'Hewan Sudah Sembuh');
        }
        PerlakuanPenyakit::create([
            'riwayat_penyakit_id' => $request->perlakuan_id,
            'perlakuan' => $request->perlakuan
        ]);
        return redirect()->back()->with('hewan', 'Perlakuan Berhasil Direkam');
    }
}
