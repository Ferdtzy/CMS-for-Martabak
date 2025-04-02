<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Ferdiankontroler;

//Route::get('/', function () {
//    return view('welcome');
//});

Route ::get('/', [HomeController::class, 'index']);
Route ::get('/contact', [HomeController::class, 'contact']);

Route ::get('/welcome', function () {
    return view('welcome');
});
Route ::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    });
    Route::get('/users', function () {
        return 'Admin Users';
    });
});

//Route::get('listbarang/{id}/{nama}', function ($id, $nama) {
//return view('list_barang' , compact('id', 'nama'));
//});

Route::get('/listbarang/{id}/{nama}',[ListBarangController::class, 'tampilkan']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboard', function () {
    return "Selamat datang di dashboard!";
})->name('dashboard');
;


Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/barang', [FerdianKontroler::class, 'tampilkan']);

Route::get('/index', function () {
    return view('index');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});