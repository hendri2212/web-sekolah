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

<!-- NAVBAR -->
<nav class="navbar navbar-dark shadow">
    <div class="container d-flex justify-content-between">
        <span class="navbar-brand fw-bold">📰 Berita SPENDA</span>

        <input type="text" id="searchInput" class="form-control search-box"
               placeholder="Cari berita...">
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <div class="row" id="beritaContainer">

        @foreach($berita as $b)
        <div class="col-md-4 mb-4 berita-item">
            <div class="card h-100 shadow-sm">

                @if ($b->gambar)
                <img src="{{ asset('gambar/'.$b->gambar) }}" class="card-img-top">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $b->judul }}</h5>
                    <p class="card-text text-muted">
                        {{ \Illuminate\Support\Str::limit($b->isi, 120) }}
                    </p>
                </div>

                <div class="card-footer bg-white border-0 text-center">

                    <!-- Detail Button -->
                    <button class="btn btn-primary btn-sm btn-custom"
                            data-bs-toggle="modal"
                            data-bs-target="#modal{{ $b->id }}">
                        Detail
                    </button>

                    <!-- Delete Button -->
                    <form action="{{ route('berita.destroy', $b->id) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger btn-sm btn-custom"
                                onclick="return confirm('Yakin ingin menghapus berita ini?')">
                            Hapus
                        </button>
                    </form>

                </div>

            </div>
        </div>

        <!-- MODAL DETAIL -->
        <div class="modal fade" id="modal{{ $b->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $b->judul }}</h5>
                        <button type="button" class="btn-close"
                                data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        @if ($b->gambar)
                        <img src="{{ asset('gambar/'.$b->gambar) }}"
                             class="img-fluid mb-3">
                        @endif
                        <p>{{ $b->isi }}</p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
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