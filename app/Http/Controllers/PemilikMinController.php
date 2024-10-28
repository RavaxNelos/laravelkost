<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kehilangan;
use App\Models\Kerusakan;
use App\Models\KamarKost;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PemilikMinController extends Controller
{
    //
    public function dashboard() {
        return view('pemilikmin.dashboard.dashboard');
    }

    public function kamar() {
        return view('pemilikmin.kamar.kamar');
    }
    public function transaksi() {
        return view('pemilikmin.transaksi.transaksi');
    }
    public function banner() {
        return view('pemilikmin.banner.banner');
    }
    public function tambahkamar() {
        return view('pemilikmin.kamar.tambahkamar');
    }
    public function menghitung() {
        // Menghitung jumlah item pada tabel `pengguna`
        $jumlahPengguna = User::where('status', 'Pengguna')->count();
        // Menghitung jumlah item pada tabel `penghuni`
        $jumlahPenghuni = User::where('status', 'Penghuni')->count();
        // Menghitung jumlah item pada tabel `kerusakan`
        $jumlahKerusakan = Kerusakan::count();
        // Menghitung jumlah item pada tabel `kehilangan`
        $jumlahKehilangan = Kehilangan::count();
        // Menjumlahkan kedua nilai untuk mendapatkan total laporan
        $jumlahlaporan = $jumlahKerusakan + $jumlahKehilangan;
        // Menghitung jumlah item pada tabel `kamar`
        $jumlahKamar = KamarKost::count();
        // Menghitung jumlah item pada tabel `pembayaran`
        $jumlahPembayaran = Transaksi::count();
    return view('pemilikmin.dashboard.dashboard', compact('jumlahPengguna', 'jumlahlaporan', 'jumlahKerusakan', 'jumlahKehilangan', 'jumlahKamar', 'jumlahPembayaran', 'jumlahPenghuni'));
    }
}
