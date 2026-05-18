<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span class="me-2">📚</span> Perpustakaan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('anggota.index') }}">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        
        <div class="mb-3">
            <a href="{{ route('anggota.index') }}" class="text-decoration-none">Anggota</a> 
            <span class="text-muted"> / Detail Anggota</span>
        </div>

        @php
            // Mengambil data anggota berdasarkan ID
            $anggota = $anggota_list[$id];
        @endphp

        <div class="card border-0 shadow-sm">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="card-title mb-0">Detail Anggota</h4>
            </div>
            <div class="card-body py-4 px-4 border border-top-0">
                
                <div class="row mb-3">
                    <div class="col-md-2 col-sm-4 fw-bold">Kode Anggota</div>
                    <div class="col-md-10 col-sm-8">: {{ $anggota['kode'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-sm-4 fw-bold">Nama Lengkap</div>
                    <div class="col-md-10 col-sm-8">: {{ $anggota['nama'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-sm-4 fw-bold">Email</div>
                    <div class="col-md-10 col-sm-8">: {{ $anggota['email'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-sm-4 fw-bold">Telepon</div>
                    <div class="col-md-10 col-sm-8">: {{ $anggota['telepon'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-sm-4 fw-bold">Alamat</div>
                    <div class="col-md-10 col-sm-8">: {{ $anggota['alamat'] }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2 col-sm-4 fw-bold">Status</div>
                    <div class="col-md-10 col-sm-8">: 
                        @if($anggota['status'] == 'Aktif')
                            <span class="badge bg-success ms-1">Aktif</span>
                        @else
                            <span class="badge bg-danger ms-1">Non-Aktif</span>
                        @endif
                    </div>
                </div>

            </div>
            <div class="card-footer bg-light border p-3">
                <a href="{{ route('anggota.index') }}" class="btn btn-secondary text-white">
                    &larr; Kembali
                </a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>