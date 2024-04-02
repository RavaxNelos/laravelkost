<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\KamarKost;
use App\Models\Kategori;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function detailrumah()
    {
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $kamarkost = KamarKost::where('status_kost', 'Publish')->get();
        return view('user.detail.index',compact('kamarkost', 'categories'));
    }
    public function menujudetail()
    {
        return view('user.detail.index');
    }
    public function detail()
    {
        $banner = Banner::where('status_banner', 'Publish')->get();
        $kamarkost = KamarKost::where('status_kost', 'Publish')->get();
        return view('user.home',compact('banner', 'kamarkost')
        );
    }
    public function transaksi()
    {
        return view('user.transaksi.index');
    }
    public function konfirmasitransaksi()
    {
        return view('user.transaksi.konfirmasitransaksi');
    }
    public function back()
    {
        return view('user.detail.index');
    }

    public function kamar()
    {
        return view('user.kamar');
    }
    public function coba()
    {
        return view('coba');
    }
    public function kerusakan()
    {
        return view('user.laporkan.laporkankerusakan');
    }
    public function kehilangan()
    {
        return view('user.laporkan.laporkankehilangan');
    }
    public function riwayat()
    {
        return view('user.riwayat');
    }
    public function profil()
    {
        $users = Auth::user();
        return view('user.profil',compact('users'));
    }
    public function profiledit(Request $request) {
        $request->validate([
            'name' => 'nullable',
            'gambar' => 'nullable',
        ]);

         // Proses gambar jika diunggah
    if ($request->hasFile('gambar')) {
        $gambarBarang = $request->file('gambar');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);
    } else {
        $namaFile = ''; // Tetapkan string kosong jika tidak ada gambar yang diunggah
    }

    // Perbarui data pengguna
    $users = Pengguna::find($request->id);
    if ($users) {
        $users->name = $request->name;
        $users->gambar = $namaFile ?: $users->gambar; // Gunakan gambar baru jika diunggah, jika tidak, gunakan gambar yang ada
        $users->save();
    }

    return back();
    }
    public function favorit()
    {
        return view('user.kamarfavorit');
    }
}
