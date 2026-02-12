<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita SPENDA</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f6f9;
        }

        .navbar {
            background: linear-gradient(45deg, #0d6efd, #004aad);
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .card img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .search-box {
            max-width: 400px;
        }

        .footer {
            background: #212529;
            color: white;
            padding: 20px;
            margin-top: 50px;
            text-align: center;
        }

        .btn-custom {
            border-radius: 20px;
        }
    </style>
</head>
<body>

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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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

</body>
</html>