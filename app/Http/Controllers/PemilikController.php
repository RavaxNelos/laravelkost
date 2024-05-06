<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\KamarKost;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemilikController extends Controller
{
    public function home()
    {
        return view('pemilik.home');
    }
    public function area()
    {
        $kamarkost = KamarKost::where('status_kost', 'Publish')->get();
        $banner    = Banner::where('status_banner', 'Publish')->get();
        return view('pemilik.areakost', compact('banner', 'kamarkost'));
    }
    public function transaksi()
    {
        $transaksi        = Transaksi::all();
        $jumlah_transaksi = $transaksi->count();
        return view('pemilik.transaksi', compact('transaksi', 'jumlah_transaksi'));
    }
    public function pengguna()
    {
        $totalUsers = User::where('role_id', '4')->count();
        $users = User::where('role_id', '4')->get();
        return view('pemilik.pengguna', compact('users', 'totalUsers'));
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
