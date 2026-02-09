<<<<<<< HEAD
<form action="/berita/{{ $berita->id}}"
=======
<form action="/berita/{{ $berita->id }}"
>>>>>>> 227068d5d3a07bff1fc0c207290c6d28d49fc58c
method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="judul" value="{{ $berita->judul}}">
<textarea name="isi">{{$berita->isi}}</textarea>

<input type="file" name="gambar">


<a href="/berita/{{$berita->id}}/edit">Edit</a>
<button type="submit">Update Now</button>
</form>
