<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }
    public function aksi_register(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        $user = User::create($validasi);
        return redirect('/login');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function aksi_login(Request $request)
    {
        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {
            return redirect()->intended('/produk');
        } else {
            return 'kredensial salah';
        }
    }
}
