<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Magang;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        $data = Magang::get();
        return view('admin.pendaftar.index', ['data' => $data]);
    }

    public function create() {}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'instansi' => 'required',
            'jurusan' => 'required',
            'semester' => 'required',
            'angkatan' => 'required',
            'nomor_whatsapp' => 'required',
            'penyakit' => 'required',
            'kegiatan' => 'required',
            'kunjungan_peternakan' => 'required',
            'pernah_magang' => 'required',
            'referal' => 'required',
            'alasan' => 'required',
            'instagram' => 'required',
            'punya_kendaraan' => 'required',
            'bisa_nyetir' => 'required'
        ]);
        $data = Magang::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'instansi' => $request->instansi,
            'jurusan' => $request->jurusan,
            'semester' => $request->semester,
            'angkatan' => $request->angkatan,
            'nomor_whatsapp' => "+62"  + $request->nomor_whatsapp,
            'penyakit' => $request->penyakit,
            'kegiatan' => $request->kegiatan,
            'kunjungan_peternakan' => $request->kunjungan_peternakan,
            'pernah_magang' => $request->pernah_magang,
            'referal' => $request->referal,
            'alasan' => $request->alasan,
            'instagram' => $request->instagram,
            'punya_kendaraan' => $request->punya_kendaraan,
            'bisa_nyetir' => $request->bisa_nyetir,
            'cv' => null,
            'status' => 'pending'
        ]);
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $fileName = $request->nim . $data->id . '.' . $file->extension();
            $path = $file->storeAs('cv', $fileName, 'public');
            $data->update([
                'cv' => $path
            ]);
        }
        return redirect('/');
    }

    public function show(Magang $pendaftar)
    {
        return view('admin.pendaftar.detail', ['data' => $pendaftar]);
    }


    public function edit() {}

    public function updateStatus(Request $request, $id){
        $magang = Magang::findOrFail($id);
        switch($request->status){
            case 'diterima':
                if($magang->status == 'selesai' || $magang->status == 'tidak_diterima'){
                    break;
                }else{
                    User::create([
                        'nama' => $magang->nama,
                        'email' => $magang->email,
                        'password' => '123',
                        'role' => 2,
                        'jenis_kelamin' => $magang->jenis_kelamin,
                        'telepon' => $magang->nomor_whatsapp
                    ]);
                    $magang->update([
                        'status' => 'diterima'
                    ]);
                    return redirect()->back()->with('success', 'Status Berhasil Diubah');
                }
                break;
            case 'tidak_diterima':
                if($magang->status == 'diterima' || $magang->status == 'selesai'){
                    break;
                }else{
                    $magang->update([
                        'status' => 'tidak_diterima'
                    ]);
                    return redirect()->back()->with('success', 'Status Berhasil Diubah');
                }
                break;
            case 'selesai':
                if($magang->status == 'pending' || $magang->status == 'tidak_diterima'){
                    break;
                }else{
                    $user = User::where('email', $magang->email)->first();
                    $user->delete();
                    $magang->update([
                        'status' => 'selesai'
                    ]);
                    return redirect()->back()->with('success', 'Status Berhasil Diubah');
                }
                break;
            default:
                break;
        }
        return redirect()->back()->with('gagal', 'Status Gagal Diubah');

    }

    public function destroy($id) {}
}
