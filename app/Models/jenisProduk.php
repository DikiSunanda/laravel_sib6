<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisProduk extends Model
{
    use HasFactory;

    protected $table = 'jenis_produk'; //Pemanggilan nama tabel jenis_produk

    //panggil kolom yang ada pada table harus sesuai yang ditable
    protected $fiilable = ['nama'];

    //Penanda atau pemanggilan class produk untuk relasi one to many
    public function produk(){
        return $this->hasMany(produk::class);
        }
}
