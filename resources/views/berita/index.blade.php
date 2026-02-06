<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita SPENDA</title>
</head>
<body>
    <h1>Berita Kegiatan SPENDA</h1>

    @foreach($berita as $b)
    <h3>{{ $b->judul }}</h3>

    @if ($b->gambar)
    <img src="{{asset('gambar/'.$b->gambar) }}"
    width="200">
    @endif

    <p>{{$b->isi}}</p>
    <hr>
    @endforeach
</body>
</html>