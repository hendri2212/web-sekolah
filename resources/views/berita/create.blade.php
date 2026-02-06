<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Tambah Berita Atau Kegiatan</h1>

    <form action="/berita" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul</label><br>
        <input type="text" name="judul"><br><br>

        <label> Isi Berita</label><br>
        <textarea name="isi"></textarea><br><br>

        <label>Gambar</label><br>
        <input type="file" name="gambar"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>