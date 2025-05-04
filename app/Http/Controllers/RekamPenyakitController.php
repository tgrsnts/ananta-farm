<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPenyakit;

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
        return redirect()->back();
    }

    public function sembuh($id){
        $riwayat = RiwayatPenyakit::findOrFail($id);
        $riwayat->update([
            'sembuh' => now()
        ]);
    }
}
