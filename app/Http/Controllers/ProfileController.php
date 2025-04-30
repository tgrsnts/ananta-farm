<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function create() {}

    public function store(Request $request) {}

    public function edit(Request $request){
        $user = Auth::user();
        $request_data = $request->validate([
            'jenis_kelamin' => 'required',
            'nama' => 'required',
            'telepon' => 'required'
        ]);
        $user->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon
        ]);
        return redirect('/admin/profile');
    }

    public function updateFoto(Request $request){
        $user = Auth::user();
        if ($request->hasFile('foto')) {
            $pathLama = storage_path('app/public/' . $user->foto);
            if (File::exists($pathLama)) {
                File::delete($pathLama);
            }
            $file = $request->file('foto');
            $fileName = $this->quickRandom() . '.' . $file->extension();
            $path = $file->storeAs('foto_profile', $fileName, 'public');
            $user->update([
                'foto' => $path
            ]);
            return redirect('/admin/profile');
        } else {
            return redirect('/admin/profile');
        }
    }


    public function destroy($id) {}

    public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}
