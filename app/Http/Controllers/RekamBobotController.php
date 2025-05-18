<?php

namespace App\Http\Controllers;

use App\Models\RekamBobot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekamBobotController extends Controller
{

    public function store(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            "hewan_id" => "required",
            "tanggal" => "required",
            "bobot" => "required"
        ]);
        RekamBobot::create([
            "hewan_id" => $request->hewan_id,
            'tanggal' => $request->tanggal,
            'bobot' => $request->bobot,
            'user_id' => $user->id_user
        ]);
        return redirect()->back()->with('hewan', 'Bobot Berhasil Direkam');
    }

    public function update(Request $request){
        $rekam = RekamBobot::findOrFail($request->id_rekamBobot);
        $user = Auth::user();
        $data = $request->validate([
            "tanggal" => "required",
            "bobot" => "required"
        ]);
        $rekam->update([
            'tangal' => $request->tanggal,
            'bobot' => $request->bobot,
            'user_id' => $user->id_user
        ]);
        return redirect()->back()->with('hewan', 'Bobot Berhasil Diubah');
    }

    public function destroy($id){
        $rekam = RekamBobot::findOrFail($id);
        $rekam->delete();
        return redirect()->back()->with('hewan', 'Data Berhasil Dihapus');
    }
}
