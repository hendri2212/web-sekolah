<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
</head>
<body>

<h2>{{$berita->judul}}</h2>
    
@if($berita->foto)
<img src="{{asset('storage/'.$berita->foto) }}" width="300">
@endif

<p>{{ $berita->isi}}</p>

<a href="{{ route('berita.index') }}">Kembali</a>
</body>
</html>