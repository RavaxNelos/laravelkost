<?php

namespace App\Http\Controllers;

use App\Models\LoginAdmin;
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

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->nomorhp  = $request->nomorhp;
        $user->password = Hash::make($request->password);
        $user->status   = 'Pengguna';
        $user->lokasi   =  'tidak ada';
        $user->role_id  = '4';
        $user->save();

        return redirect('/login')->with('success', 'Register Berhasil');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $users      = Auth::user();
        $credetials = [
            'name'     => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            if (Auth::user()->role_id == 1) {
                return redirect('/admin/dashboard');
            } elseif(Auth::user()->role_id == 2) {
                return redirect('/pemilikmin/dashboard');
            } elseif(Auth::user()->role_id == 3) {
                return redirect('/pemilik/home');
            } elseif(Auth::user()->role_id == 4) {
                return redirect('/user/home');
            }

        }

        return back()->with('error', 'Nama atau Password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function getAdmin()
    {
        return view('login.loginadmin');
    }

    public function postAdmin(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'password' => 'required',
        ]);

        // dd($request);

        $get_admin = LoginAdmin::whereName($request->name)->first();


        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
            // dd(Auth::user());
            return redirect('/pemilikmin/dashboard')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Nama atau Sandi salah');
    }
}
