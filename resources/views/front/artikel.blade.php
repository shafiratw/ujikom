@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
@include('partials.page-header', ['judul' => 'Artikel & Informasi Terkini', 'subjudul' => 'Berita dan tips seputar konektivitas dan jaringan'])

<section class="py-5" style="background: var(--abu-muda);">
  <div class="container">
    <div class="row g-4">
      @forelse($artikels as $a)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
            @include('partials.foto', ['url' => $a->foto_url, 'alt' => $a->judul, 'tinggi' => '200px'])
            <div class="card-body d-flex flex-column">
              <small class="text-secondary mb-1"><i class="bi bi-calendar3 me-1"></i>{{ $a->created_at->format('d M Y') }}</small>
              <h5 class="fw-bold" style="color: var(--biru-tua);">{{ $a->judul }}</h5>
              <p class="small text-secondary">{{ \Illuminate\Support\Str::limit(strip_tags($a->isi), 120) }}</p>
              <a href="{{ route('artikel.show', $a->id) }}" class="mt-auto small fw-semibold text-decoration-none">Baca selengkapnya &rarr;</a>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-secondary">Belum ada artikel yang dipublikasikan.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection