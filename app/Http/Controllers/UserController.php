<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\KamarKost;
use App\Models\Kategori;
use App\Models\Pembayaran;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function detailrumah(string $id)
    {
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $kamarkost = KamarKost::find($id);
        $users = Auth::user();
        return view('user.detail.index',compact('kamarkost', 'categories', 'users'));
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
    public function transaksi(string $id)
    {
        $users = Auth::user();
        $kamarkost = KamarKost::find($id);
        $pembayaran = Pembayaran::all();
        $pembayaransSelected = Pembayaran::find($id);
        return view('user.transaksi.index',compact('pembayaran', 'kamarkost', 'users', 'pembayaransSelected')
    );
    }
    public function konfirmasitransaksi(string $id)
    {
        $users = Auth::user();
        $kamarkost = KamarKost::find($id);
        $pembayaran = Pembayaran::orderBy('created_at', 'desc')->get();
        return view('user.transaksi.konfirmasitransaksi',compact('pembayaran', 'kamarkost', 'users')
    );
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

    return back()->with('success', "Profil Berhasil Dirubah");
    }

    public function akunedit(Request $request) {
        $request->validate([
            'email' => 'nullable',
            'nomorhp' => 'nullable',
        ]);

        $users = Pengguna::find($request->id);
        $users->email = $request->email;
        $users->nomorhp = $request->nomorhp;
        $users->save();

        return back()->with('success', "Akun Berhasil Dirubah");
    }

    public function sandiedit(Request $request) {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required|same:new_password'
        ]);

        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Password Tidak Sama'], 422);
        }

        if (strcmp($request->password, $request->new_password) == 0) {
            return response()->json(['error' => 'Sandi Baru Tidak Sama Dengan Password Kamu.'], 422);
        }

        $user = Pengguna::find($user->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => 'Password Berhasil Dirubah']);

        // $request->validate([
        //     'password' => 'required',
        //     'new_password' => 'min:6',
        //     'new_password_confirmation' => 'required_with:new_password|same:new_password|min:6'
        // ]);

        // $auth = Auth::user();

        // // The passwords matches
        // if (!Hash::check($request->get('password'), $auth->password))
        // {
        //     return back()->with('error', "Password Tidak Sama");
        // }

        // // Current Password And New Password Same
        // if (strcmp($request->get('password'), $request->new_password) == 0)
        // {
        //     return redirect()->back()->with("error", "Sandi Baru Tidak Sama Dengan Password Kamu.");
        // }

        // $users = Pengguna::find($auth->id);
        // $users->password = Hash::make($request->new_password);
        // $users->save();
        // return back()->with('success', "Password Berhasil Dirubah");
    }

    public function favorit()
    {
        return view('user.kamarfavorit');
    }
}
