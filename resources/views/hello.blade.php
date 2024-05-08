<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello ini file pertama saya didalam view laravel</h1>

    {{--Pendeklarasian Variabel Didalam Blade Enginee--}}
    @php
    $nama = 'Diki';
    $nilai = 97.00;
    @endphp


   {{--Struktur Kendali IF--}}
    @if ($nilai > 60)
    @php $ket = "Lulus"; @endphp
    @else
    @php $ket = "Tidak Lulus"; @endphp
    @endif

    {{--Memanggil variabel hasil didalam laravel menggunakan kurung kurawal--}}
    {{$nama}} <h2> Dengan nilai </h2> {{$nilai}} <h2> Dinyatakan </h2> {{$ket}}

</body>
</html>