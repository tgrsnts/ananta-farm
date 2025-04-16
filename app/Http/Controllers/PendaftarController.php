<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        return view('admin.pendaftar.index', );
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $data = Magang::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jenis_kelamin' => $request->jenis_kelamin,
            'instansi' => $request->instansi,
            'jurusan' => $request->jurusan,
            'semester' => $request->semester,
            'angkatan' => $request->angkatan,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'penyakit' => $request->penyakit,
            'kegiatan'=> $request->kegiatan,
            'kunjungan_peternakan' => $request->kunjungan_peternakan,
            'pernah_magang'=> $request->pernah_magang,
            'referal' => $request->referal,
            'alasan' => $request->alasan,
            'instagram' => $request->instagram,
            'punya_kendaraan' => $request->punya_kendaraan,
            'bisa_nyetir' => $request->bisa_nyetir,
            'cv' => null
        ]);
        if($request->hasFile('cv')){
            $file = $request->file('cv');
            $fileName = $request->nim.'.'.$file->extension();
            $path = $file->storeAs('cv', $fileName, 'public');
            $data->update([
                'cv' => $path
            ]);
        }
        return redirect('/');
    }

    public function edit() {}

    public function update() {}

    public function destroy($id)
    {

    }
}
