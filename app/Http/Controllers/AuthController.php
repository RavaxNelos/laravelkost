<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->nomorhp = $request->nomorhp;
        $user->password = Hash::make($request->password);
        $user->konfirmasipassword = Hash::make($request->konfirmasipassword);

        $user->save();

        return redirect('/login')->with('success', 'Register Berhasil');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            if (Auth::user()->role_id == 1) {
                return redirect('/admin/dashboard');
            } elseif(Auth::user()->role_id == 2) {
                return redirect('/pemilik/home');
            } elseif(Auth::user()->role_id == 3) {
                return redirect('/user/home');
            } elseif(Auth::user()->role_id == 4) {
                return redirect('/permilik2/dashboard');
            }

        }

        return back()->with('error', 'Nama atau Password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

}
