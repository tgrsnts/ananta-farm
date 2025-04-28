<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request){

    }

    public function login(Request $request){
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->intended('admin/');
        }

    }
}
