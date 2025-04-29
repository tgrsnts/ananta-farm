<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        Hewan::create([
            "nama_hewan" => $request->nama_hewan,
            'jenis_hewan' => $request->jenis_hewan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'foto' => $request->foto,
        ]);
        return redirect('admin/hewan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hewan $hewan)
    {
        $hewan->load(['rekam_bobot']);

        return view('admin.hewan.detail', ['data' => $hewan]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hewan $hewan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hewan $hewan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hewan $hewan)
    {
        //
    }
}
