<?php

namespace App\Http\Controllers;

use App\Models\Kandang;
use Illuminate\Http\Request;

class KandangController extends Controller
{
    public function index() {
        $kandang = Kandang::all();
        return view('admin.kandang.index', ['kandang' => $kandang]);
    }

    public function create() {
        return view('admin.kandang.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            "nama_kandang" => "required"
        ]);
        Kandang::create([
            "nama_kandang" => $request->nama_kandang
        ]);
        return redirect('admin/kandang');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy($id) {
        $kandang = Kandang::findOrFail($id);
        $kandang->delete();
        return redirect('admin/kandang');
    }
}
