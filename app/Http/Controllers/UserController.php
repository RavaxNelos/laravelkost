<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Favorit;
use App\Models\Jamkamarkost;
use App\Models\KamarKost;
use App\Models\Kategori;
use App\Models\Pembayaran;
use App\Models\Pengguna;
use Carbon\Carbon;
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
        $jamkamarkost = Jamkamarkost::all();
        $users = Auth::user();
        $favorit = Favorit::where('kamar_kost_id', $id)->where('category', $kamarkost->tipe_kost)->where('user_id', Auth::user()->id)->first();
        return view('user.detail.index',compact('kamarkost', 'categories', 'jamkamarkost', 'users', 'favorit'));
    }

    public function favoritadd(Request $request)
    {

        $kamarkost = KamarKost::find($request->kamar_kost_id);
        // Simpan informasi ke dalam tabel favorit
        $favorit = Favorit::where('user_id', Auth::user()->id)->where('kamar_kost_id', $request->kamar_kost_id)->where('category', $kamarkost->tipe_kost)->first();

        if ($favorit) {
            $favorit->delete();
        } else {
            Favorit::create([
                'user_id' => Auth::user()->id,
                'kamar_kost_id' => $request->kamar_kost_id,
                'category' => $kamarkost->tipe_kost,
            ]);
        }

        // Response
        return response()->json(['message' => 'Success', 'alert' => $favorit ? 'Dihapus Dari Favorit' : 'Berhasil difavoritkan'],200);
    }
    public function menujudetail()
    {
        return view('user.detail.index');
    }
    public function detail()
    // string $id
    {
        // $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $users = Auth::user();
        $banner = Banner::where('status_banner', 'Publish')->get();
        $kamarkost = KamarKost::where('status_kost', 'Publish')->get();
        $kamarpopulerbulanan = KamarKost::where('status_kost', 'Publish')->where('tipe_kost', 'Bulanan')->where('lokasi_kost', 'Kamar Kost Populer')->get();
        $kamarpopulerharian = KamarKost::where('status_kost', 'Publish')->where('tipe_kost', 'Harian')->where('lokasi_kost', 'Kamar Kost Populer')->get();
        // $favorit = Favorit::where('kamar_kost_id', $id)->where('category', $kamarkost->tipe_kost)->where('user_id', Auth::user()->id)->first();
        return view('user.home',compact('users', 'banner', 'kamarkost', 'kamarpopulerbulanan', 'kamarpopulerharian')
        );
    }
    public function getTime(Request $request)
    {

        session()->put('selectedDate', $request->selectedDate);
        session()->put('getDate', $request->getDate);
        session()->put('waktu', $request->time);
        return redirect()->to('/user/transaksi/' . $request->productId);
    }
    public function getDate(Request $request)
    {
        session()->put('selectedDate', $request->selectedDate);
        session()->put('getDate', $request->getDate);
        session()->put('waktu', $request->time);
        session()->put('time', $request->formattedTime);
    }
    public function transaksi($id)
    {
        $time = session()->get('getDate');
        $users = Auth::user();
        $jamkamarkost = Jamkamarkost::find($id);
        $kamarkost = KamarKost::find($id);
        $pembayaran = Pembayaran::get();
        $pembayaran_e_wallet = Pembayaran::where('kategori_pembayaran', 'E-Wallet')->get();
        $pembayaran_transfer_bank = Pembayaran::where('kategori_pembayaran', 'Transfer Bank')->get();
        $pembayaranSelected = Pembayaran::find($id);
        $selectedTime = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
        $jamkamarkost = Jamkamarkost::all();

        // Kirim data metode pembayaran yang dipilih ke tampilan
        return view('user.transaksi.index', compact('pembayaran', 'kamarkost', 'users', 'pembayaranSelected', 'pembayaran_e_wallet', 'pembayaran_transfer_bank', 'selectedTime', 'jamkamarkost', 'time'));
    }
    public function paymentCheck(Request $request)
    {
        $pembayaran = Pembayaran::find($request->payment_id);
        session()->put('payment_id', $request->payment_id);
        return response()->json(['gambar' => '/uploadkamar/' . $pembayaran->logo_pembayaran, 'name' => $pembayaran->nama_pembayaran]);
    }
    public function checkPayment()
    {
        $pembayaran = Pembayaran::find(session()->get('payment_id'));
        return response()->json(['gambar' => '/uploadkamar/' . $pembayaran->logo_pembayaran, 'name' => $pembayaran->nama_pembayaran]);
        // return response()->json(['gambar' => 'test']);
    }
    public function konfirmasitransaksi(string $id)
    {
        $time = session()->get('getDate');
        $selectedTime = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
        $users = Auth::user();
        $kamarkost = KamarKost::find($id);
        $kamarkosts = KamarKost::where('status_kost', 'Publish')->get();
        $pembayaran = Pembayaran::find(session()->get('payment_id'));
        $pembayaranSelected = Pembayaran::find($id);
        // $transaksi = transaksi::find(session()->get('payment_id'));
        return view('user.transaksi.konfirmasitransaksi',compact('pembayaran', 'kamarkost', 'kamarkosts', 'users', 'pembayaranSelected', 'time', 'selectedTime')
    );
    }
    public function back()
    {
        return view('user.detail.index');
    }
    public function semua(string $id)
    {
        $kamarkost = KamarKost::where('status_kost', 'Publish')->get();
        return view('user.semua', compact('kamarkost'));
    }

    public function kamar()
    {
        $users = Auth::user();
        return view('user.kamar', compact('users'));
    }
    public function coba()
    {
        return view('coba');
    }
    public function kerusakan($id)
    {
        $users = Auth::user();
        return view('user.laporkan.laporkankerusakan', compact('users'));
    }
    public function kehilangan($id)
    {
        $users = Auth::user();
        return view('user.laporkan.laporkankehilangan', compact('users'));
    }
    public function riwayat()
    {
        $users = Auth::user();
        return view('user.riwayat', compact('users'));
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
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $favorites = Favorit::orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $users = Auth::user();
        $kamarkost = KamarKost::whereIn('id', $favorites->pluck('kamar_kost_id'))->get();
        return view('user.kamarfavorit', compact('users', 'favorites', 'categories', 'kamarkost'));
    }

    public function favoritdelete (Request $request)
    {
        $favorites = Favorit::find($request->favorite_id);
        $favorites->delete();

        return response()->json(['message' => 'Success', 'alert' => 'DiHapus dari Favorite'], 200);
    }
    // public function favoritPost($id)
    // {
    //     // Cek apakah pengguna sudah autentikasi
    //     if (Auth::check()) {
    //         // Dapatkan objek KamarKost berdasarkan ID
    //         $kamarkost = KamarKost::findOrFail($id);

    //         // Tambahkan kamar kost ke daftar favorit pengguna saat ini
    //         Auth::user()->favorites()->attach($kamarkost);

    //         // Balas dengan pesan atau respon JSON sesuai kebutuhan aplikasi Anda
    //         return response()->json(['message' => 'Kamar Kost telah ditambahkan ke favorit.']);
    //     }

    //     // Jika pengguna tidak terautentikasi, balas dengan respon status 401 (Unauthorized)
    //     return response()->json(['error' => 'Unauthenticated.'], 401);
    //     return view('user.kamarfavorit');
    // }
}
