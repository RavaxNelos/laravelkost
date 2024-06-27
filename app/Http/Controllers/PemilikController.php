<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\KamarKost;
use App\Models\Kategori;
use App\Models\Pengguna;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PemilikController extends Controller
{
    public function home($id = null)
    {
        $users = Auth::user();
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $banner     = Banner::where('status_banner', 'Publish')->get();

        $kamarkost                        = KamarKost::where('status_kost', 'Publish')->first();
        $kamarpopulerbulanan              = KamarKost::where('status_kost', 'Publish')->where('tipe_kost', 'Bulanan')->where('lokasi_kost', 'Kamar Kost Populer')->get();
        $kamarpopulerharian               = KamarKost::where('status_kost', 'Publish')->where('tipe_kost', 'Harian')->where('lokasi_kost', 'Kamar Kost Populer')->get();
        $kamarkost_didekat_kamu           = KamarKost::where('lokasi_kost', 'Didekat Kamu')->get();
        $kamarkost_area_surabaya_timur    = KamarKost::where('lokasi_kost', 'Area Surabaya Timur')->get();
        $kamarkost_putra                  = KamarKost::where('lokasi_kost', 'Kamar Kost Putra')->get();
        $kamarkost_populer                = KamarKost::where('lokasi_kost', 'Kamar Kost Populer')->get();
        $kamarkost_putri                  = KamarKost::where('lokasi_kost', 'Kamar Kost Putri')->get();
        $kamarkost_area_surabaya_barat    = KamarKost::where('lokasi_kost', 'Area Surabaya Barat')->get();
        $kamarkost_rekomendasi_kamar_kost = KamarKost::where('lokasi_kost', 'Rekomendasi Kamar Kost')->get();
        return view('pemilik.home',compact('users', 'banner', 'kamarkost', 'kamarpopulerbulanan', 'kamarpopulerharian', 'categories', 'kamarkost_didekat_kamu', 'kamarkost_populer', 'kamarkost_area_surabaya_timur', 'kamarkost_putra', 'kamarkost_putri', 'kamarkost_area_surabaya_barat', 'kamarkost_rekomendasi_kamar_kost'));
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
    $users     = User::where('role_id', '4')->get();
    $usersBaru = [];
    $usersLama = [];

    foreach ($users as $user) {
    $timeDifference = now()->diffInDays($user->created_at);
    if ($timeDifference < 1) {
          // Pengguna yang dibuat dalam waktu kurang dari 1 hari adalah pengguna baru
        $usersBaru[] = $user;
    } else {
          // Pengguna yang dibuat lebih dari 1 hari yang lalu adalah pengguna lama
        $usersLama[] = $user;
    }
    }

    // Jumlah pengguna baru
    $countUsersBaru = count($usersBaru);

    // Jumlah pengguna lama
    $countUsersLama = count($usersLama);
    $totalUsers     = User::where('role_id', '4')->count();
        return view('pemilik.pengguna', compact('users', 'totalUsers', 'usersBaru', 'usersLama'));
    }
    public function riwayat()
    {
        $users     = Auth::user();
        $transaksi = Transaksi::all();
        return view('pemilik.riwayat', compact('users', 'transaksi'));
    }
    public function detailriwayat($id)
    {
        $transaksi = Transaksi::find($id);

    if ($transaksi) {
        // Mengambil pengguna yang terkait dengan transaksi
        $users = $transaksi->user;
    } else {
        // Jika tidak ada transaksi, Anda mungkin ingin menangani kesalahan ini
        $users = null;
    }

    $kamarkost = KamarKost::find($id);

    return view('pemilik.detailriwayat', compact('users', 'transaksi', 'kamarkost'));
    }

    public function detailtransaksi($id)
    {
        $transaksi = Transaksi::find($id);

    if ($transaksi) {
        // Mengambil pengguna yang terkait dengan transaksi
        $users = $transaksi->user;
    } else {
        // Jika tidak ada transaksi, Anda mungkin ingin menangani kesalahan ini
        $users = null;
    }

    $kamarkost = KamarKost::find($id);

    return view('pemilik.detailtransaksi', compact('users', 'transaksi', 'kamarkost'));
    }
    public function profil()
    {
        $users = Auth::user();
        return view('pemilik.profil', compact('users'));
    }

    public function profilpemilikedit(Request $request) {
        $request->validate([
            'name'   => 'nullable',
            'gambar' => 'nullable',
        ]);

                             // Proses gambar jika diunggah
    if ($request->hasFile('gambar')) {
        $gambarBarang = $request->file('gambar');
        $namaFile     = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);
    } else {
        $namaFile = '';  // Tetapkan string kosong jika tidak ada gambar yang diunggah
    }

                        // Perbarui data pengguna
    $users = Pengguna::find($request->id);
    if ($users) {
        $users->name   = $request->name;
        $users->gambar = $namaFile ?: $users->gambar;  // Gunakan gambar baru jika diunggah, jika tidak, gunakan gambar yang ada
        $users->save();
    }

    return back()->with('success', "Profil Berhasil Dirubah");
    }

    public function akunpemilikedit(Request $request) {
        $request->validate([
            'email'   => 'nullable',
            'nomorhp' => 'nullable',
        ]);

        $users          = Pengguna::find($request->id);
        $users->email   = $request->email;
        $users->nomorhp = $request->nomorhp;
        $users->save();

        return back()->with('success', "Akun Berhasil Dirubah");
    }
    public function sandipemilikedit(Request $request) {
        $request->validate([
            'password'                  => 'required',
            'new_password'              => 'required',
            'new_password_confirmation' => 'required|same:new_password'
        ]);

        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Password Tidak Sama'], 422);
        }

        if (strcmp($request->password, $request->new_password) == 0) {
            return response()->json(['error' => 'Sandi Baru Tidak Sama Dengan Password Kamu.'], 422);
        }

        $user           = Pengguna::find($user->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => 'Password Berhasil Dirubah']);
    }
}
