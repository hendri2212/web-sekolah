<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
    <style>
        body{
            background:#f4f6f9;
            font-family:'Segoe UI', sans-serif;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">SMPN 2 Kotabaru</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/berita') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <h1>RPL SMKN 1 KOTABARU</h1>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
