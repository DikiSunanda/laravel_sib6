<?php
//jenis produk dan produk akan dibuat 
//type penulisan query builder
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenisProduk;

//Library ketika menggunakan penulisan query builder
use DB;
// use Illuminate\Support\Facades\DB;
class jenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fungsi ini biasanya digunakan untuk mengarahkan ke file index
        //variable jenis ini mendeklarasikan table yang diambil dari model
        //untuk kemudian variable tersebut dikirimkan ke view
        $jenis = DB::table('jenis_produk')->get();

        //return view mengarahkan ke view dan compact mengirim variable ke view
        return view ('admin.jenis.index', compact('jenis'));

        // return vieew ('admin.jenis.index', ['jenis' => $jenis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}