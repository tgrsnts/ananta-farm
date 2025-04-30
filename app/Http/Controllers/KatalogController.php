<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KatalogController extends Controller
{
    public function index()
    {
        $katalog = Katalog::get();
        return view('katalog.index', ['katalog' => $katalog]);
    }

    public function index_admin()
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

    public function update(Request $request, $id){
        $katalog = Katalog::findOrFail($id);
        $katalog->update([
           'nama' => $request->nama,
            'bobot' => $request->bobot,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
        ]);
        if ($request->hasFile('foto')) {
            $pathLama = storage_path('app/public/' . $katalog->foto);
            if (File::exists($pathLama)) {
                File::delete($pathLama);
            }
            $file = $request->file('foto');
            $fileName = $request->bobot. $katalog->id . '.' . $file->extension();
            $path = $file->storeAs('fotoKatalog', $fileName, 'public');
            $katalog->update([
                'foto' => $path
            ]);
        }
        return redirect()->route('admin.katalog.index');
    }

    public function destroy($id){
        $katalog = Katalog::findOrFail($id);
        $katalog->delete();
        return redirect('/admin/katalog');
    }
}
