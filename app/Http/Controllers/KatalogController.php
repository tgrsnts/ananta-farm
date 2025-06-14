<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KatalogController extends Controller
{
    public function index()
    {
        $jenis = request('jenis');

        $katalog = Katalog::when($jenis, function ($query, $jenis) {
            return $query->where('jenis', $jenis);
        })->get();

        $jenisHewan = Katalog::pluck('jenis')->unique();

        return view('katalog.index', [
            'katalog' => $katalog,
            'jenis_hewan' => $jenisHewan
        ]);
    }


    public function index_admin()
    {
        $katalog = Katalog::get();
        return view('admin.katalog.index', ['katalog' => $katalog]);
    }

    public function store(Request $request)
    {
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
            $fileName = $this->quickRandom() . $katalog->id_katalog . '.' . $file->extension();
            $path = $file->storeAs('fotoKatalog', $fileName, 'public');
            $katalog->update([
                'foto' => $path
            ]);
        }
        return redirect()->back()->with('katalog', 'Data Berhasil Ditambah');
    }

    public function update(Request $request, $id)
    {
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
            $fileName = $this->quickRandom() . $katalog->id_katalog . '.' . $file->extension();
            $path = $file->storeAs('fotoKatalog', $fileName, 'public');
            $katalog->update([
                'foto' => $path
            ]);
        }
        return redirect()->back()->with('katalog', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $katalog = Katalog::findOrFail($id);
        $foto = storage_path('app/public/' . $katalog->foto);
        if (File::exists($foto)) {
            File::delete($foto);
        }
        $katalog->delete();
        return redirect()->back()->with('katalog', 'Data Berhasil Dihapus');
    }

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}
