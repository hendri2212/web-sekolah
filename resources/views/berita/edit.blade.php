<form action="/berita/{{ $berita->id}}"
method="POST" enctype="multipart/from-data">
@csrf

<input type="text" name="judul" value="{{ $berita->judul}}">
<textarea name="isi">{{$berita->isi}}</textarea>

<input type="file" name="gambar">


<a href="/berita/{{$berita->id}}/edit">Edit</a>
<button type="submit">Update Now</button>
</form>