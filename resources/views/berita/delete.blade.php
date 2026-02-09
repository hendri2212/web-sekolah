<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Berita</title>
</head>
<body>
    <div style="text-align:center">
        <h1>Konfirmasi Hapus Berita</h1>
        <h3>{{ $berita->judul }}</h3>

        @if ($berita->gambar)
        <img src="{{ asset('gambar/' . $berita->gambar) }}" width="200" alt="Gambar Berita">
        @endif

        <p>{{ $berita->isi }}</p>
        <p><strong>Tanggal:</strong> {{ $berita->tanggal }}</p>

        <form action="/berita/{{ $berita->id }}/delete" method="POST" style="display:inline;">
            @csrf
            
            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
        </form>

        <a href="/berita/{{$berita->id}}/delete" style="margin-left: 10px;">Batal</a>
    </div>
</body>
</html>
