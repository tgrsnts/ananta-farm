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

    public function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'bobot' => 'required',
            'harga' => 'required',
            'jenis' => 'required'
        ]);
        $katalog = Katalog::create([
            'nama' => $request->nama,
            'bobot' => $request->bobot,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'foto' => null
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $request->bobot. $katalog->id . '.' . $file->extension();
            $path = $file->storeAs('fotoKatalog', $fileName, 'public');
            $katalog->update([
                'foto' => $path
            ]);
        }
        return redirect('/admin/katalog');
    }

    public function destroy($id){
        $katalog = Katalog::findOrFail($id);
        $katalog->delete();
        return redirect('/admin/katalog');
    }
}
