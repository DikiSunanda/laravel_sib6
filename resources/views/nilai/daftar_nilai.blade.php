<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Ini adalah file kedua</h1>

    @php
    $no = 1;
    $s1 = ['Nama'=> 'Fawazz', 'Nilai' => 70];
    $s2 = ['Nama'=> 'Jono', 'Nilai' => 80];
    $s3 = ['Nama'=> 'Eka', 'Nilai' => 30];
    $s4 = ['Nama'=> 'Vina', 'Nilai' => 50];
    $s5 = ['Nama'=> 'Shani', 'Nilai' => 100];
    $judul = ['No', 'Nama', 'Nilai', 'Keterangan'];

    $siswa = [$s1, $s2, $s3, $s4, $s5];
    @endphp

    <table align="center" border="1" cellpadding="20px" cellspacing="none" >
        <thead>
            <tr bgcolor="Yellow">
                {{--Foreach adalah sebuah perulangan yang dimiiliki oleh php didalam laravel--}}
                @Foreach($judul as $jdl)
                <th>{{$jdl}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
            @php
            $ket = ($s['Nilai'] >= 60) ? 'Lulus' : 'Gagal';
            $warna = ($no % 2 == 1)? 'Green' : 'Yellow';
            @endphp
            <tr bgcolor="{{$warna}}">
                <td>{{$no++}}</td>
                <td>{{$s['Nama']}}</td>
                <td>{{$s['Nilai']}}</td>
                <td>{{$ket}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>