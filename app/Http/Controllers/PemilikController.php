<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function home()
    {
        return view('pemilik.home');
    }
    public function area()
    {
        $banner = Banner::where('status_banner', 'Publish')->get();
        return view('pemilik.areakost', compact('banner'));
    }
    public function transaksi()
    {
        return view('pemilik.transaksi');
    }
    public function pengguna()
    {
        return view('pemilik.pengguna');
    }
    public function riwayat()
    {
        return view('pemilik.riwayat');
    }
    public function profil()
    {
        return view('pemilik.profil');
    }
}
