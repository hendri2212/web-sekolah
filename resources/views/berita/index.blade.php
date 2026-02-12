@extends('welcome')

@section('content')
    @foreach($berita as $b)
    <h3>{{ $b->judul }}</h3>
    <a href="{{ route('berita.show' , $b->id) }}">Lebih Lengkap</a>
    

    @if ($b->gambar)
    <img src="{{asset('gambar/'.$b->gambar) }}"
    width="250">
    @endif

<!-- CONTENT -->
<div class="container mt-5">
    <div class="row" id="beritaContainer">

    
    @endforeach
</div>

<!-- FOOTER -->
<div class="footer">
    © {{ date('Y') }} SPENDA | Sistem Informasi Berita Modern
</div>

<!-- SEARCH SCRIPT -->
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let items = document.querySelectorAll('.berita-item');

        items.forEach(function(item) {
            let text = item.innerText.toLowerCase();
            item.style.display = text.includes(filter) ? "" : "none";
        });
    });
</script>
@endsection