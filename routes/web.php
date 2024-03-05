<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/detail', function () {
    return view('user.detail.index');
});

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
    return view('user.coba');
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
