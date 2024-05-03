<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Fasilitas;
use App\Models\Favorit;
use App\Models\Jamkamarkost;
use App\Models\KamarKost;
use App\Models\KamarKostFasilitas;
use App\Models\Kategori;
use App\Models\Kehilangan;
use App\Models\Kerusakan;
use App\Models\Pembayaran;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function detailrumah($id)
    {
        $categories           = Kategori::where('lokasi', 'Kategori Kost')->get();
        $kamarkost            = KamarKost::find($id);
        $jamkamarkost         = Jamkamarkost::all();
        $users                = Auth::user();
        $favorit              = Favorit::where('kamar_kost_id', $id)->where('category', $kamarkost->tipe_kost)->where('user_id', Auth::user()->id)->first();
        $kamar_kost_fasilitas = $kamarkost ? KamarKost::find($kamarkost->id)->kamarkostfasilitas : null;
        return view('user.detail.index',compact('kamarkost', 'categories', 'jamkamarkost', 'users', 'favorit', 'kamar_kost_fasilitas'));
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
                'user_id'       => Auth::user()->id,
                'kamar_kost_id' => $request->kamar_kost_id,
                'category'      => $kamarkost->tipe_kost,
            ]);
        }

                      // Response
        return response()->json(['message' => 'Success', 'alert' => $favorit ? 'Dihapus Dari Favorit' : 'Berhasil difavoritkan'],200);
    }
    public function menujudetail()
    {
        return view('user.detail.index');
    }
    public function detail($id = null)
    {
        $categories = Kategori::where('lokasi', 'Kategori Kost')->get();
        $users      = Auth::user();
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

        $favorit = Favorit::where('category', $kamarkost->tipe_kost)->where('user_id', Auth::user()->id)->first();

        return view('user.home',compact('users', 'banner', 'kamarkost', 'kamarpopulerbulanan', 'kamarpopulerharian', 'categories', 'favorit', 'kamarkost_didekat_kamu', 'kamarkost_populer', 'kamarkost_area_surabaya_timur', 'kamarkost_putra', 'kamarkost_putri', 'kamarkost_area_surabaya_barat', 'kamarkost_rekomendasi_kamar_kost'));
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
        $time                     = session()->get('getDate');
        $users                    = Auth::user();
        $jamkamarkost             = Jamkamarkost::find($id);
        $kamarkost                = KamarKost::find($id);
        $pembayaran               = Pembayaran::get();
        $pembayaran_e_wallet      = Pembayaran::where('kategori_pembayaran', 'E-Wallet')->get();
        $pembayaran_transfer_bank = Pembayaran::where('kategori_pembayaran', 'Transfer Bank')->get();
        $pembayaranSelected       = Pembayaran::find($id);
        $selectedTime             = Carbon::parse(session()->get('selectedDate'))->isoFormat('DD MMMM Y') . ', ' . session()->get('waktu');
        $jamkamarkost             = Jamkamarkost::all();

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
    public function konfirmasitransaksi(Request $request, $id)
    {
    $selectedTime       = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
    $time               = session()->get('getDate');
    $kamarkost          = KamarKost::find($id);
    $kamarkosts         = KamarKost::where('status_kost', 'Publish')->get();
    $pembayaran         = Pembayaran::find(session()->get('payment_id'));
    $pembayaranSelected = Pembayaran::find($id);
    $hargaKost          = str_replace('.', '', $kamarkost->harga_kost);
    $hargaKost          = (int) $hargaKost;
    $totalPembayaran    = $hargaKost + 200000 - 25000;
    $users              = Auth::user();
              //durasi
              // $hariIni = Carbon::now();
              // $selisihTanggal = $selectedTime->diffInDays($hariIni);
              // $bulan = floor($selisihTanggal / 30); // Hitung bulan
              // $hari = $selisihTanggal % 30; // Hitung sisa hari
              // $hasil = "{$bulan} bulan {$hari} hari";
              // DATE REAL TIME
              // $transaksi = transaksi::find(session()->get('payment_id'));
        return view('user.transaksi.konfirmasitransaksi',compact('pembayaran', 'kamarkost', 'kamarkosts', 'users', 'pembayaranSelected', 'time', 'selectedTime', 'totalPembayaran', 'hargaKost')
        );
    }
    public function konfirmasitransaksiPost(Request $request)
    {
        $id              = $request->id;
        $totalPembayaran = $request->input('totalPembayaran');
        $users           = Auth::user();
        $kode            = 'SUB/';
                  // dd($totalPembayaran);
           $unique                            = Transaksi::where('no_transaksi', 'LIKE', "$kode%")->latest('no_transaksi')->first();
        if ($unique != null) $generateNewKode = intval(substr($unique->no_transaksi,strlen($kode)));
           $kode                              = $kode . ($unique != null ? Str::padLeft($generateNewKode + 1, 3, 0) : Str::padLeft(1, 3, 0));

        $gambarBarang = $request->file('gambar');
        $namaFile     = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('uploadkamar'), $namaFile);

        $selectedTime = Carbon::parse(session()->get('selectedDate'))->isoFormat('D MMMM Y') . ', ' . session()->get('waktu');
        $time         = session()->get('getDate');
        $kamarkost    = KamarKost::find($id);

                  // Menghapus titik dari nilai yang diambil dari database
        $hargaKost = str_replace('.', '', $kamarkost->harga_kost);

                  // Mengonversi string ke tipe data integer
        $hargaKost = (int) $hargaKost;

                  // Melakukan perhitungan dengan nilai yang sudah dikonversi
        $totalPembayaran = $hargaKost + 200000 - 25000;

        $kamarkosts         = KamarKost::where('status_kost', 'Publish')->get();
        $pembayaran         = Pembayaran::find(session()->get('payment_id'));
        $pembayaranSelected = Pembayaran::find($id);

        $transaksi = Transaksi::create([
            'kamar_kost_id'       => $kamarkost->id,
            'user_id'             => $users->id,
            'tanggal_pesan_kost'  => $time,
            'tanggal_masuk_kost'  => $selectedTime,
            'pembayaran_dipilih'  => $pembayaran->id,
            'total_harga'         => $totalPembayaran,
            'bukti_tf'            => $namaFile,
            'no_transaksi'        => $kode,
            'tagihan_selanjutnya' => '1.000.000',
            'durasi_ngekost'      => '5 Bulan 3 Hari',
            'status'              => 'proses',
            'pesan'               => 'Kost Sedang Diproses',
        ]);

                      // $transaksi = transaksi::find(session()->get('payment_id'));
        return redirect()->to('/user/home');
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
    $users                = Auth::user();
    $transaksi            = Transaksi::where('user_id', $users->id)->latest()->first();
    $kamar_kost           = $transaksi ? KamarKost::find($transaksi->kamar_kost_id) : null;
    $kamar_kost_fasilitas = $transaksi ? KamarKost::find($transaksi->kamar_kost_id)->kamarkostfasilitas : null;

      // dd(KamarKost::find($transaksi->kamar_kost_id)->kamarkostfasilitas);
    $fasKamar      = Fasilitas::where('tipe', 'Kamar')->get();
    $fasKamarmandi = Fasilitas::where('tipe', 'Kamar Mandi')->get();
    $fasUmum       = Fasilitas::where('tipe', 'Umum')->get();
    $fasParkir     = Fasilitas::where('tipe', 'Parkir')->get();
      // dd($kamar_kost_fasilitas);
    return view('user.kamar', compact('users', 'transaksi', 'kamar_kost', 'kamar_kost_fasilitas', 'fasKamar', 'fasKamarmandi', 'fasUmum', 'fasParkir'));
}

    public function getFasilitas($kamarKostFasilitasId) {
        $kamar_kost_fasilitas = KamarKostFasilitas::find($kamarKostFasilitasId)->fasilitas;
        return response()->json(['kamarKostFasilitas'=> $kamar_kost_fasilitas]);
    }
    public function coba()
    {
        return view('coba');
    }
    public function kerusakan($id)
    {
        $users      = Auth::user();
        $transaksi  = Transaksi::where('user_id', $users->id)->latest()->first();
        $kamar_kost = $transaksi ? KamarKost::find($transaksi->kamar_kost_id) : null;
        $kerusakan  = $transaksi ? Kerusakan::where('user_id',$users->id)->first() : null;
        return view('user.laporkan.laporkankerusakan', compact('users', 'transaksi', 'kamar_kost', 'kerusakan'));
    }
    public function kerusakanPost(Request $request)
    {
        $user       = Auth::user();
        $transaksi  = Transaksi::where('user_id', $user->id)->latest()->first();
        $kamar_kost = $transaksi ? KamarKost::find($transaksi->kamar_kost_id) : null;



        $kerusakan = Kerusakan::create([
            'user_id'       => $user->name,
            'nomer_kamar'   => $kamar_kost->nomer_kost,
            'tanggal_lapor' => $request->tanggal_lapor,
            'barang_rusak'  => $request->barang_rusak,
            'keterangan'     => $request->keterangan,
            'status'        => 'Menunggu Respon',
        ]);
                      // $transaksi = transaksi::find(session()->get('payment_id'));
        return redirect()->to('/user/kerusakan/{id}');
    }
    public function kehilangan($id)
    {
        $users      = Auth::user();
        $transaksi  = Transaksi::where('user_id', $users->id)->latest()->first();
        $kamar_kost = $transaksi ? KamarKost::find($transaksi->kamar_kost_id) : null;
        $kehilangan = $transaksi ? Kehilangan::where('user_id',$users->id)->get() : null;
        return view('user.laporkan.laporkankehilangan', compact('users', 'transaksi', 'kamar_kost', 'kehilangan'));
    }


    public function kehilanganPost(Request $request)
    {

        $user       = Auth::user();
        $transaksi  = Transaksi::where('user_id', $user->id)->latest()->first();
        $kamar_kost = $transaksi ? KamarKost::find($transaksi->kamar_kost_id) : null;

        $kehilangan = Kehilangan::create([
            'user_id'        => $user->id,
            'nomer_kamar'    => $kamar_kost->nomer_kost,
            'lokasi_hilang'  => $request->lokasi_hilang,
            'barang_hilang'  => $request->barang_hilang,
            'tanggal_hilang' => $request->tanggal_hilang,
            'jam_hilang'     => $request->jam_hilang,
            'keterangan'     => $request->keterangan,
            'status'         => 'Menunggu Respon',
        ]);
                      // $transaksi = transaksi::find(session()->get('payment_id'));
        return redirect()->to('/user/kehilangan/{id}');
    }

    public function detailkehilangan($id)
    {
        $users      = Auth::user();
        $transaksi  = Transaksi::find($id);
        $kamarkost  = KamarKost::find($id);
        $kehilangan = Kehilangan::find($id);
        return view('user.laporkan.detailkehilangan', compact('users', 'transaksi', 'kamarkost', 'kehilangan'));
    }
    public function riwayat()
    {
        $users     = Auth::user();
        $transaksi = Transaksi::where('user_id', $users->id)->latest()->get();
                  // $transaksi = Transaksi::();
        return view('user.riwayat', compact('users', 'transaksi'));
    }
    public function detailriwayat($id)
    {
        $users     = Auth::user();
        $transaksi = Transaksi::find($id);
        $kamarkost = KamarKost::find($id);
        return view('user.detailriwayat', compact('users', 'transaksi', 'kamarkost'));
    }
    public function profil()
    {
        $users = Auth::user();
        return view('user.profil',compact('users'));
    }
    public function profiledit(Request $request) {
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

    public function akunedit(Request $request) {
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

    public function sandiedit(Request $request) {
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
        $favorites  = Favorit::orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $users      = Auth::user();
        $kamarkost  = KamarKost::whereIn('id', $favorites->pluck('kamar_kost_id'))->get();
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
