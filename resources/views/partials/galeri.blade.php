<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMKN 4 Bogor</title>
    <!-- Bootstrap 5 & Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<section id="galeri">
<body class="bg-light">
    
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Galeri Sekolah</h2>
            <p class="text-muted">Dokumentasi berbagai kegiatan, prestasi, dan aktivitas pembelajaran di SMKN 4 Bogor.</p>
        </div>

        <div class="row">
            {{-- Mengambil data dari variabel $galeris yang dikirim dari GaleriController@index --}}
            
            @forelse($galeri ?? [] as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        @if($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="Foto Galeri" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                                <span>Tidak ada foto</span>
                            </div>
                        @endif
                        
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <span class="text-muted small mb-2 d-block">
                                    <i class="bi bi-calendar3"></i> {{ $item->created_at->format('d F Y') }}
                                </span>
                                <p class="card-text text-dark fw-semibold">{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted fst-italic">Belum ada galeri yang dipublikasikan saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</section>
</html>