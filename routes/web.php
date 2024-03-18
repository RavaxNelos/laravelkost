<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PemilikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
Route::get('/user/kamar', [UserController::class, 'kamar'])->name('kamar');
Route::get('/user/riwayat', [UserController::class, 'riwayat'])->name('riwayat');
Route::get('/user/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/user/kerusakan', [UserController::class, 'kerusakan'])->name('kerusakan');
Route::get('/user/kehilangan', [UserController::class, 'kehilangan'])->name('kehilangan');
Route::get('/user/home', [UserController::class, 'detail'])->name('detail');
Route::get('/user/detail', [UserController::class, 'detailrumah'])->name('detailrumah');
Route::get('/user/transaksi', [UserController::class, 'transaksi'])->name('transaksi');
Route::get('/user/konfirmasitransaksi', [UserController::class, 'konfirmasitransaksi'])->name('konfirmasitransaksi');

//pemilik controller
Route::get('/pemilik/home', [PemilikController::class, 'home'])->name('home');
Route::get('/pemilik/area', [PemilikController::class, 'area'])->name('area');
Route::get('/pemilik/transaksi', [PemilikController::class, 'transaksi'])->name('transaksi');
Route::get('/pemilik/pengguna', [PemilikController::class, 'pengguna'])->name('pengguna');
Route::get('/pemilik/riwayat', [PemilikController::class, 'riwayat'])->name('riwayat');
Route::get('/pemilik/profil', [PemilikController::class, 'profil'])->name('profil');

//admin controller
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/kamar', [AdminController::class, 'kamar'])->name('kamar');

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
