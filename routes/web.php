<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jenisProdukController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\kartuController;
use App\Http\Controllers\pelangganController;
// Route::get('/', function () {
//     return view('welcome');
// });

//Contoh routing untuk mengarahkan user ke view tanpa melalui conroler
Route::get('/percobaan_pertama', function(){
    return view('Hello');
});

//Contoh routing untuk mengarahkan ke dirinya sendiri tanpa view dan tanpa controller
Route::get('/salam', function(){
    return "<h1> Selamat Malam Well </h1>";
});

//contoh routing yang menggunakan parameter
Route::get('/staff/{nama}/{divisi}', function($nama, $divisi){
    return 'Nama Pegawai : '.$nama. '<br>Departemen : '.$divisi;
});

//Contoh Return yang mengarah kedalam file yang berada didalam folder di folder view
Route::get('/daftar_nilai', function(){
    return view('nilai.daftar_nilai');
});

Route::get('/dashboard',function(){
    return view ('admin.dashboard');
});

Route::get('/',function(){
    return view ('front.home');
});

// prefix and grouping adalah mengelompokan routing ke satu jenis route
Route::prefix('admin')->group(function(){
// route memanggil controller setiap fungsi,
// (nanti linknya menggunakan url)
Route::get('/jenisProduk',[jenisProdukController::class, 'index']);
Route::post('/jenisProduk/store',[jenisProdukController::class, 'store']);
// Route dengan pemanggilan class
Route::resource('produk', produkController::class);
Route::resource('pelanggan', pelangganController::class);
//Route kartu
Route::get('/kartu', [kartuController::class, 'index']);
Route::post('/kartu/store', [kartuController::class, 'store']);
});