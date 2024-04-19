<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PemilikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PemilikMinController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\JamkamarkostController;
use App\Http\Controllers\KamarKostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemilikTabelControlller;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

//user controller
// Route::get('/user/kamar', [UserController::class, 'kamar'])->name('kamar');
// Route::get('/user/riwayat', [UserController::class, 'riwayat'])->name('riwayat');
// Route::get('/user/profil', [UserController::class, 'profil'])->name('profil');
// Route::get('/user/kerusakan', [UserController::class, 'kerusakan'])->name('kerusakan');
// Route::get('/user/kehilangan', [UserController::class, 'kehilangan'])->name('kehilangan');
// Route::get('/user/home', [UserController::class, 'detail'])->name('detail');
// Route::get('/user/detail/{id}', [UserController::class, 'detailrumah'])->name('detailrumah');
// Route::get('/user/transaksi', [UserController::class, 'transaksi'])->name('transaksi');
// Route::get('/user/konfirmasitransaksi', [UserController::class, 'konfirmasitransaksi'])->name('konfirmasitransaksi');

//user controller percobaan
Route::group(['middleware' => 'auth'], function () {
Route::get('/user/kamar', [UserController::class, 'kamar'])->name('kamar');
Route::get('/user/riwayat', [UserController::class, 'riwayat'])->name('riwayat');
Route::get('/user/profil', [UserController::class, 'profil'])->name('profil');
Route::post('/user/profil/edit', [UserController::class, 'profiledit'])->name('user.profil');
Route::post('/user/akun/edit', [UserController::class, 'akunedit']);

Route::group(['middleware' => 'auth'], function ()
{
Route::post('/user/sandi/edit', [UserController::class, 'sandiedit']);
});

Route::get('/user/kerusakan/{id}', [UserController::class, 'kerusakan'])->name('kerusakan');
Route::get('/user/kehilangan/{id}', [UserController::class, 'kehilangan'])->name('kehilangan');
Route::get('/user/home', [UserController::class, 'detail'])->name('detail');
Route::get('/user/detail/{id}', [UserController::class, 'detailrumah'])->name('detailrumah');
Route::post('/user/getTime', [UserController::class, 'getTime']);
Route::post('/user/getDate', [UserController::class, 'getDate']);
Route::get('/user/transaksi/{id}', [UserController::class, 'transaksi'])->name('transaksi');
Route::post('/user/transaksi/check', [UserController::class, 'paymentCheck']);
Route::post('/user/transaksi/confirmation', [UserController::class, 'checkPayment']);
Route::get('/user/konfirmasitransaksi/{id}', [UserController::class, 'konfirmasitransaksi'])->name('konfirmasitransaksi');
Route::get('/user/semua/{id}', [UserController::class, 'semua'])->name('semua');
Route::get('/user/favorit', [UserController::class, 'favorit'])->name('favorit');
Route::post('/favorite/add', [UserController::class, 'favoritadd']);
Route::post('/favorit/delete', [UserController::class, 'favoritdelete']);
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
})->name('logout');
});

//pemilik controller
Route::get('/pemilik/home', [PemilikController::class, 'home'])->name('home');
Route::get('/pemilik/area', [PemilikController::class, 'area'])->name('area');
Route::get('/pemilik/transaksi', [PemilikController::class, 'transaksi'])->name('transaksi');
Route::get('/pemilik/pengguna', [PemilikController::class, 'pengguna'])->name('pengguna');
Route::get('/pemilik/riwayat', [PemilikController::class, 'riwayat'])->name('riwayat');
Route::get('/pemilik/profil', [PemilikController::class, 'profil'])->name('profil');

//admin controller
Route::get('/pemilikmin/dashboard', [PemilikMinController::class, 'dashboard'])->name('dashboard');
Route::get('/pemilikmin/kamar', [KamarKostController::class, 'index'])->name('kamar');
Route::get('toggleStatus/{id}', [KamarKostController::class, 'toggleStatus'])->name('toggleStatus');
Route::get('/pemilikmin/tambahkamar', [KamarKostController::class, 'create'])->name('tambahkamar');
Route::post('/pemilikmin/kamar', [KamarKostController::class, 'store'])->name('kamar.store');
Route::get('/pemilikmin/editkamar/{id}', [KamarKostController::class, 'edit'])->name('editkamar');
Route::post('/pemilikmin/editkamar', [KamarKostController::class, 'update'])->name('editkamarPost');
Route::delete('/pemilikmin/kamar/destroy/{id}', [KamarKostController::class, 'destroy'])->name('destroy');
Route::get('/pemilikmin/transaksi', [PemilikMinController::class, 'transaksi'])->name('transaksi');
Route::get('/pemilikmin/tambahkamar', [PemilikMinController::class, 'tambahkamar'])->name('tambahkamar');
Route::get('/pemilikmin/banner', [BannerController::class, 'index'])->name('banner');
Route::get('toggleStatusBanner/{id}', [BannerController::class, 'toggleStatusBanner'])->name('toggleStatusBanner');
Route::get('/pemilikmin/tambahbanner', [BannerController::class, 'create'])->name('tambahbanner');
Route::post('/pemilikmin/banner', [BannerController::class, 'store'])->name('banner.store');
Route::get('/pemilikmin/editbanner/{id}', [BannerController::class, 'edit'])->name('editbanner');
Route::post('/pemilikmin/editbanner', [BannerController::class, 'update'])->name('editbannerPost');
Route::delete('/pemilikmin/banner/destroy/{id}', [BannerController::class, 'destroy'])->name('destroy');
Route::get('/pemilikmin/pembayaran', [PembayaranController::class, 'index'])->name('bayar');
Route::get('/pemilikmin/tambahpembayaran', [PembayaranController::class, 'create'])->name('tambahpembayaran');
Route::post('/pemilikmin/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pemilikmin/editpembayaran/{id}', [PembayaranController::class, 'edit'])->name('editpembayaran');
Route::post('/pemilikmin/editpembayaran', [PembayaranController::class, 'update'])->name('editpembayaranPost');
Route::delete('/pemilikmin/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy'])->name('destroy');
Route::get('/pemilikmin/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::get('/pemilikmin/tambahpengguna', [PenggunaController::class, 'create'])->name('tambahpengguna');
Route::post('/pemilikmin/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');
Route::get('/pemilikmin/editpengguna/{id}', [PenggunaController::class, 'edit'])->name('editpengguna');
Route::post('/pemilikmin/editpengguna', [PenggunaController::class, 'update'])->name('editpenggunaPost');
Route::delete('/pemilikmin/pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('destroy');
Route::get('/pemilikmin/pemilik', [PemilikTabelControlller::class, 'index'])->name('pemilik');
Route::get('/pemilikmin/tambahpemilik', [PemilikTabelControlller::class, 'create'])->name('tambahpengguna');
Route::post('/pemilikmin/pemilik', [PemilikTabelControlller::class, 'store'])->name('pemilik.store');
Route::get('/pemilikmin/editpemilik/{id}', [PemilikTabelControlller::class, 'edit'])->name('editpengguna');
Route::post('/pemilikmin/editpemilik', [PemilikTabelControlller::class, 'update'])->name('editpenggunaPost');
Route::delete('/pemilikmin/pemilik/destroy/{id}', [PemilikTabelControlller::class, 'destroy'])->name('destroy');
Route::get('/pemilikmin/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/pemilikmin/tambahkategori', [KategoriController::class, 'create'])->name('tambahkategori');
Route::post('/pemilikmin/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/pemilikmin/editkategori/{id}', [KategoriController::class, 'edit'])->name('editkategori');
Route::post('/pemilikmin/editkategori', [KategoriController::class, 'update'])->name('editkategoriPost');
Route::delete('/pemilikmin/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->name('destroy');
Route::get('/pemilikmin/jamkamarkost', [JamkamarkostController::class, 'index'])->name('jamkamarkost');
Route::get('/pemilikmin/tambahjamkamarkost', [JamkamarkostController::class, 'create'])->name('tambahjamkamarkost');
Route::post('/pemilikmin/jamkamarkost', [JamkamarkostController::class, 'store'])->name('jamkamarkost.store');
Route::get('/pemilikmin/editjamkamarkost/{id}', [JamkamarkostController::class, 'edit'])->name('editjamkamarkost');
Route::post('/pemilikmin/editjamkamarkost', [JamkamarkostController::class, 'update'])->name('editjamkamarkostPost');
Route::delete('/pemilikmin/jamkamarkost/destroy/{id}', [JamkamarkostController::class, 'destroy'])->name('destroy');

//pemilik2 controller
// Route::get('/pemilik2/dashboard', [])
// Route::resource('kamar', KamarKostController::class);
Route::get('/transaksi', function() {
    return view('user.transaksi.index');
});

Route::get('/konfirmasitransaksi', function () {
    return view('user.transaksi.konfirmasitransaksi');
});

Route::get('/kamar', function() {
    return view('user.kamar');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/kerusakan', function() {
    return view('user.laporkan.laporkankerusakan');
});
Route::get('/kehilangan', function() {
    return view('user.laporkan.laporkankehilangan');
});
Route::get('/riwayat', function() {
    return view('user.riwayat');
});
Route::get('/profil', function() {
    return view('user.profil');
});
Route::get('/favorit', function() {
    return view('user.kamarfavorit');
});

Route::get('/transaksi', [UserController::class, 'transaksi'])->name('transaksi');

Route::get('/detail', [UserController::class, 'detailrumah'])->name('detailrumah');

Route::get('/checkout', [UserController::class, 'bayar'])->name('checkout');

Route::group(['middleware' => 'guest'], function () {
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('registerPost', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
Route::get('/home',[UserController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [UserController::class, 'detail'])->name('kembalidetail');
});
