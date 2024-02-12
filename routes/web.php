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
    return view('welcome');
});
Route::get('/detail', function () {
    return view('detail.index');
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
