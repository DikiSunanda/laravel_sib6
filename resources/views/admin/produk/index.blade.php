@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk Kami</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                      
                        <div class="card mb-4">
            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Jenis Produk</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Jenis Produk</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $no=1 @endphp
                                        @foreach($produk as $p)
                                        <tr>
                                            <td>{{$p->kode}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->harga_beli}}</td>
                                            <td>{{$p->harga_jual}}</td>
                                            <td>{{$p->stok}}</td>
                                            <td>{{$p->jenis_produk}}</td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection