<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
</head>
<body>

<h2>{{$berita->judul}}</h2>
    
@if($berita->gambar)
<img src="{{asset('gambar/'.$berita->gambar) }}" width="300">
@endif

<p>{{ $berita->isi}}</p>


</body>
</html>