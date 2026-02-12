<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMPN 2 Kotabaru</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
    font-family:'Segoe UI', sans-serif;
}

.navbar{
    background:#0d6efd;
}

.section-title{
    border-left:5px solid #0056d6;
    padding-left:10px;
    font-weight:600;
}

.card-hover{
    transition:0.3s;
}
.card-hover:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

.program-box{
    border-radius:10px;
    padding:20px;
    color:white;
    text-align:center;
    font-weight:600;
    transition:0.3s;
}
.program-box:hover{
    opacity:0.9;
    transform:scale(1.05);
}

.footer{
    background:#0f172a;
    color:white;
    padding:40px 0;
    margin-top:40px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
<a class="navbar-brand fw-bold" href="#">SMPN 2 Kotabaru</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
<li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
<li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
<li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
</ul>
</div>
</div>
</nav>

<!-- HERO -->
<div class="container my-4 text-center">
<h3 class="fw-bold">SMPN 2 Kotabaru</h3>
<p class="text-muted">
Sekolah Menengah Pertama Negeri yang berlokasi di Pulau Laut Utara,
Kabupaten Kotabaru, Kalimantan Selatan.
</p>
</div>

<!-- PRESTASI -->
<div class="container my-4">
<h5 class="section-title mb-3">Prestasi & Kegiatan Siswa</h5>
<div class="owl-carousel">

<div class="card border-0 card-hover">
<img src="https://picsum.photos/400/250?1" class="card-img-top rounded">
<div class="card-body">
<p class="fw-bold small text-muted">Juara Olimpiade Sains</p>
</div>
</div>

<div class="card border-0 card-hover">
<img src="https://picsum.photos/400/250?2" class="card-img-top rounded">
<div class="card-body">
<p class="fw-bold small text-muted">Lomba Pramuka Kabupaten</p>
</div>
</div>

<div class="card border-0 card-hover">
<img src="https://picsum.photos/400/250?3" class="card-img-top rounded">
<div class="card-body">
<p class="fw-bold small text-muted">Kegiatan P5 Projek</p>
</div>
</div>

</div>
</div>

<!-- INFORMASI -->
<div class="container my-5">
<div class="row text-center g-4">

<div class="col-6 col-md-4">
<div class="card p-4 card-hover">
<i class="fa fa-users fa-2x text-primary mb-2"></i>
<h6>Jumlah Siswa</h6>
<p class="text-muted mb-0">500+ Siswa Aktif</p>
</div>
</div>

<div class="col-6 col-md-4">
<div class="card p-4 card-hover">
<i class="fa fa-chalkboard-teacher fa-2x text-success mb-2"></i>
<h6>Tenaga Pendidik</h6>
<p class="text-muted mb-0">40+ Guru & Staff</p>
</div>
</div>

<div class="col-6 col-md-4">
<div class="card p-4 card-hover">
<i class="fa fa-award fa-2x text-warning mb-2"></i>
<h6>Prestasi</h6>
<p class="text-muted mb-0">20+ Prestasi Akademik</p>
</div>
</div>

</div>
</div>

<!-- BERITA -->
<div class="container my-5">
<h5 class="section-title mb-4">Berita Terbaru</h5>

<div class="row g-4">

<div class="col-md-6 col-lg-4">
<div class="card card-hover h-100">
<img src="https://picsum.photos/400/250?4" class="card-img-top">
<div class="card-body">
<h6 class="fw-bold">Peringatan Hari Guru</h6>
<small class="text-muted"><i class="fa fa-calendar"></i> 25/11/2026</small>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4">
<div class="card card-hover h-100">
<img src="https://picsum.photos/400/250?5" class="card-img-top">
<div class="card-body">
<h6 class="fw-bold">Kegiatan Literasi Sekolah</h6>
<small class="text-muted"><i class="fa fa-calendar"></i> 10/02/2026</small>
</div>
</div>
</div>

</div>
</div>

<!-- FOOTER -->
<div class="footer">
<div class="container">
<div class="row">
<div class="col-md-6">
<h6>SMPN 2 Kotabaru</h6>
<p>Pulau Laut Utara, Kabupaten Kotabaru</p>
<p>Kalimantan Selatan</p>
<p>Email: smpn2kotabaru@gmail.com</p>
</div>
<div class="col-md-6 text-md-end">
<p>Ikuti Kami</p>
<i class="fab fa-facebook fa-lg me-2"></i>
<i class="fab fa-instagram fa-lg me-2"></i>
<i class="fab fa-youtube fa-lg"></i>
</div>
</div>
<hr>
<p class="text-center mt-3 mb-0">
© 2026 SMPN 2 Kotabaru - Website 
</p>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
$(".owl-carousel").owlCarousel({
loop:true,
margin:10,
responsive:{
0:{items:1},
576:{items:2},
992:{items:3}
}
});
});
</script>

</body>
</html>