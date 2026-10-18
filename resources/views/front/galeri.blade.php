@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
@include('partials.page-header', ['judul' => 'Galeri Kegiatan', 'subjudul' => 'Dokumentasi kegiatan ' . $profil->nama_perusahaan])

<section class="py-5" style="background: var(--abu-muda);">
  <div class="container">
    <div class="row g-4">
      @forelse($galeris as $g)
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
            @include('partials.foto', ['url' => $g->foto_url, 'alt' => $g->judul, 'tinggi' => '240px'])
            <div class="card-body">
              <h6 class="fw-bold mb-1" style="color: var(--biru-tua);">{{ $g->judul }}</h6>
              <p class="small text-secondary mb-0">{{ $g->deskripsi }}</p>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-secondary">Belum ada foto kegiatan.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection