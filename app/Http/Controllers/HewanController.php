<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;
use App\Models\RiwayatPenyakit;
use Illuminate\Support\Facades\File;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hewan = Hewan::get();
        return view('admin.hewan.index', ['hewan' => $hewan]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nama_hewan" => "required",
            "jenis_hewan" => "required",
            "jenis_kelamin" => "required",
            "tanggal_lahir" => "required",
            "kategori" => "required"
        ]);
        $hewan = Hewan::create([
            "nama_hewan" => $request->nama_hewan,
            'jenis_hewan' => $request->jenis_hewan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'foto' => null,
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $this->quickRandom() . $hewan->id_hewan . '.' . $file->extension();
            $path = $file->storeAs('fotoHewan', $fileName, 'public');
            $hewan->update([
                'foto' => $path
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Hewan $hewan)
    {
        $hewan->load(['rekam_bobot', 'riwayat_penyakit.perlakuan']);

        return view('admin.hewan.detail', ['data' => $hewan]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $hewan = Hewan::findOrFail($id);
        $data = $request->validate([
            'nama_hewan' => 'required',
            'jenis_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'kategori' => 'required',
        ]);
        $hewan->update($data);
        if ($request->hasFile('foto')) {
            $pathLama = storage_path('app/public/' . $hewan->foto);
            if (File::exists($pathLama)) {
                File::delete($pathLama);
            }
            $file = $request->file('foto');
            $fileName = $this->quickRandom() . $hewan->id . '.' . $file->extension();
            $path = $file->storeAs('fotoHewan', $fileName, 'public');
            $hewan->update([
                'foto' => $path
            ]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hewan = Hewan::findOrFail($id);
        $hewan->delete();
        return redirect()->route('admin.hewan.index');
    }

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}
