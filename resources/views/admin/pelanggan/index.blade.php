@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Kartu Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                      
                        <div class="card mb-4">
                        <div class="card-header">
                                <a href="{{route('pelanggan.create')}}" class="btn btn-lg btn-primary">   
                                <i class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($pelanggan as $pl)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$pl->kode}}</td>
                                            <td>{{$pl->nama}}</td>
                                            <td>{{$pl->jk}}</td>
                                            <td>{{$pl->tmp_lahir}}</td>
                                            <td>{{$pl->tgl_lahir}}</td>
                                            <td>{{$pl->email}}</td>
                                            <td>{{$pl->kartu->nama}}</td>
                                            <td>
                                                <a href="{{route('pelanggan.show', $pl->id)}}" class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection