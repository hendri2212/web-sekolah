<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita SMPN 2 KOTABARU</title>
</head>
<body>

<h2>{{$berita->judul}}</h2>
@if($berita->gambar)
<img src="{{asset('gambar/'.$berita->gambar) }}" width="300">
@endif

<p>{{ $berita->isi}}</p>

 <a href="/berita/{{$berita->id}}/delete" style="margin-left: 10px;">Hapus</a>

</body>
</html>