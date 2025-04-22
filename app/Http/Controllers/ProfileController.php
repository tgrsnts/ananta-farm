<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function create() {}

    public function store(Request $request) {}

    public function edit() {}

    public function update() {}

    public function destroy($id) {}
}
