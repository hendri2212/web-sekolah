@extends('welcome')

@section('title', 'Beranda Sekolah')

@section('content')
<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-6 fw-bold">Selamat Datang di Website Sekolah</h1>
            <p class="col-md-8 fs-5 mb-0">
                Halaman ini memakai Blade inheritance: file ini `@extends('welcome')` dan konten ditampilkan melalui `@yield('content')` di layout.
            </p>
        </div>
    </div>
</div>
@endsection
