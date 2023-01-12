<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\BukuController;
use App\HTTP\Controllers\KategoriController;
use App\HTTP\Controllers\MemberController;
use App\HTTP\Controllers\UsersController;
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\PenjualanController;
use App\HTTP\Controllers\RestokController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id}', [BukuController::class, 'update']);
Route::get('/buku/detail/{id}', [BukuController::class, 'show']);
Route::get('/buku/destroy/{id}', [BukuController::class, 'destroy']);

//Kategori

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/detail/{id}', [KategoriController::class, 'show']);
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

//Member

Route::get('/member', [MemberController::class, 'index']);
Route::get('/member/create', [MemberController::class, 'create']);
Route::post('/member/store', [MemberController::class, 'store']);
Route::get('/member/edit/{id}', [MemberController::class, 'edit']);
Route::post('/member/update/{id}', [MemberController::class, 'update']);
Route::get('/member/detail/{id}', [MemberController::class, 'show']);
Route::get('/member/destroy/{id}', [MemberController::class, 'destroy']);

//Users

Route::get('/user', [UsersController::class, 'index']);
Route::get('/user/create', [UsersController::class, 'create']);
Route::post('/user/store', [UsersController::class, 'store']);
Route::get('/user/edit/{id}', [UsersController::class, 'edit']);
Route::post('/user/update/{id}', [UsersController::class, 'update']);
Route::get('/user/detail/{id}', [UsersController::class, 'show']);
Route::get('/user/destroy/{id}', [UsersController::class, 'destroy'])->name('delete_judul');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Penjualan

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/create', [PenjualanController::class, 'create']);
Route::get('/cari/member', [PenjualanController::class,'cari'])->name('member/cari');
Route::get('/carii/buku', [PenjualanController::class,'carii'])->name('buku/carii');
Route::post('/simpan_transaksi', [PenjualanController::class,'simpan_transaksi'])->name('simpan_transaksi');
Route::get('/simpan_transaksi/struk',[PenjualanController::class,'simpan_transaksi']);
Route::get('/penjualan/detail/{id}', [PenjualanController::class, 'show']);
Route::get('/penjualan/destroy/{id}', [PenjualanController::class, 'destroy']);


//Restok

Route::get('/restok', [RestokController::class, 'index']);
Route::get('/restok/edit/{id}', [RestokController::class, 'edit']);
Route::post('/restok/update/{id}', [RestokController::class, 'update']);
Route::get('/restok/detail/{id}', [RestokController::class, 'show']);
Route::get('/restok/destroy/{id}', [RestokController::class, 'destroy']);