@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

{{-- SELAMAT DATANG --}}
<div class="rounded-4 p-4 p-md-5 mb-4 text-white"
     style="background: linear-gradient(135deg, #0085ff, #1e3a8a);">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
            <h3 class="fw-bold mb-2">Selamat Datang di Dashboard</h3>
            <p class="mb-0 opacity-75">
                Kelola layanan, artikel, galeri, dan pesan masuk
                {{ config('app.name') === 'Laravel' ? 'PT Solusi Koneksi Anda' : config('app.name') }} dengan mudah dari sini.
            </p>
        </div>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-light rounded-3 px-4 fw-semibold">
            <i class="bi bi-box-arrow-up-right me-1"></i> Lihat Website
        </a>
    </div>
</div>

@php
    $stat = [
        ['Profil Perusahaan', $profilData->tahun_berdiri ?? '-', 'bi-building',    'admin.profil.edit'],
        ['Layanan',           $totalProduk,                      'bi-hdd-network', 'admin.layanan.index'],
        ['Artikel',           $totalArtikel,                     'bi-newspaper',   'admin.artikel.index'],
        ['Foto Galeri',       $totalGaleri,                      'bi-images',      'admin.galeri.index'],
        ['Pesan Masuk',       $totalPesan,                       'bi-envelope',    'admin.pesan.index'],
    ];
@endphp

{{-- KARTU STATISTIK (Sejajar 5 Kolom di Desktop) --}}
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 g-3 mb-4">
    @foreach($stat as [$label, $jumlah, $ikon, $route])
        <div class="col">
            <a href="{{ route($route) }}" class="text-decoration-none d-block h-100">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 d-flex flex-row align-items-center gap-2">
                    {{-- Ukuran wrapper icon dikecilkan sedikit (dari 48px ke 40px) & font icon ke 1.1rem agar hemat ruang --}}
                    <div class="rounded-3 d-flex align-items-center justify-content-center text-white flex-shrink-0"
                        style="width:40px;height:40px;background:#0085ff;font-size:1.1rem;">
                        <i class="bi {{ $ikon }}"></i>
                    </div>
                    <div class="min-w-0 lh-sm">
                        {{-- Hapus text-nowrap, gunakan small & lh-sm agar jika teksnya turun tidak berantakan --}}
                        <div class="text-secondary" style="font-size: 0.8rem; line-height: 1.2;">{{ $label }}</div>
                        <div class="fs-4 fw-bold text-dark mt-0.5 lh-1">{{ $jumlah }}</div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

{{-- GALERI & ARTIKEL TERBARU --}}
<div class="row g-4">

    <!-- Galeri terbaru -->
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0" style="color:#1e3a8a;"><i class="bi bi-images me-2"></i>Galeri Terbaru</h6>
                <a href="{{ route('admin.galeri.index') }}" class="small text-decoration-none">Lihat semua</a>
            </div>
            <div class="row g-2">
                @forelse($galeriTerbaru as $g)
                    <div class="col-6">
                        <div class="rounded-3 overflow-hidden bg-primary-subtle" style="height:110px;">
                            @if($g->foto_url)
                                <img src="{{ $g->foto_url }}" alt="{{ $g->judul }}" class="w-100 h-100"
                                    style="object-fit:cover;" onerror="this.style.display='none'">
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="text-secondary small mb-0">Belum ada foto galeri.</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Artikel terbaru -->
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0" style="color:#1e3a8a;"><i class="bi bi-newspaper me-2"></i>Artikel Terbaru</h6>
                <a href="{{ route('admin.artikel.index') }}" class="small text-decoration-none">Lihat semua</a>
            </div>
            @forelse($artikelTerbaru as $a)
                <div class="d-flex justify-content-between align-items-center py-2 {{ !$loop->last ? 'border-bottom' : '' }}">
                    <div class="fw-semibold small">{{ \Illuminate\Support\Str::limit($a->judul, 48) }}</div>
                    <small class="text-secondary text-nowrap ms-3">{{ $a->created_at->format('d M Y') }}</small>
                </div>
            @empty
                <p class="text-secondary small mb-0">Belum ada artikel.</p>
            @endforelse
        </div>
    </div>

</div>
@endsection