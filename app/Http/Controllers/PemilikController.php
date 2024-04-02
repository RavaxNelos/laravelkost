<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\KamarKost;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function home()
    {
        return view('pemilik.home');
    }
    public function area()
    {
        $kamarkost = KamarKost::where('status_kost', 'Publish')->get();
        $banner = Banner::where('status_banner', 'Publish')->get();
        return view('pemilik.areakost', compact('banner', 'kamarkost'));
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
