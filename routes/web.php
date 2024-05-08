<?php

use Illuminate\Support\Facades\Route;

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

