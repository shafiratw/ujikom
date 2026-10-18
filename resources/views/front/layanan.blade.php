@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
@include('partials.page-header', [
    'judul'    => 'Layanan Jasa Kami',
    'subjudul' => 'Jasa konektivitas dan jaringan profesional untuk rumah dan usaha anda',
])

<section class="py-5" style="background: var(--abu-muda);">
  <div class="container">
    <div class="row g-4">
      @forelse($produks as $p)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
            @include('partials.foto', ['url' => $p->foto_url, 'alt' => $p->nama, 'tinggi' => '210px'])
            <div class="card-body d-flex flex-column">
              <h5 class="fw-bold" style="color: var(--biru-tua);">{{ $p->nama }}</h5>
              <p class="text-secondary small">{{ $p->deskripsi }}</p>

              @if($p->harga)
                <div class="mt-auto pt-3 border-top">
                  <small class="text-secondary d-block">Biaya mulai dari</small>
                  <span class="fw-bold fs-5" style="color: var(--biru);">Rp {{ number_format($p->harga, 0, ',', '.') }}</span>
                </div>
              @endif
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-secondary">Belum ada layanan yang dipublikasikan.</p>
      @endforelse
    </div>
  </div>
</section>
@endsection