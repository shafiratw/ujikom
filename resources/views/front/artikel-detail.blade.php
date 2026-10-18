@extends('layouts.app')

@section('title', $artikel->judul)

@section('content')
@include('partials.page-header', ['judul' => 'Detail Artikel'])

<section class="py-5" style="background: var(--abu-muda);">
  <div class="container">
    <div class="row g-4">

      {{-- Isi artikel --}}
      <div class="col-lg-8">
        <article class="card border-0 shadow-sm rounded-4 overflow-hidden">
          @include('partials.foto', ['url' => $artikel->foto_url, 'alt' => $artikel->judul, 'tinggi' => '340px'])
          <div class="card-body p-4 p-md-5">
            <small class="text-secondary"><i class="bi bi-calendar3 me-1"></i>{{ $artikel->created_at->format('d F Y') }}</small>
            <h2 class="fw-bold mt-2 mb-4" style="color: var(--biru-tua);">{{ $artikel->judul }}</h2>
            <div class="lh-lg">{!! nl2br(e($artikel->isi)) !!}</div>
            <a href="{{ route('artikel.index') }}" class="btn btn-outline-primary rounded-3 mt-4">&larr; Kembali ke Artikel</a>
          </div>
        </article>
      </div>

      {{-- Artikel lainnya --}}
      <div class="col-lg-4">
        <h5 class="fw-bold mb-3" style="color: var(--biru-tua);">Artikel Lainnya</h5>
        <div class="d-flex flex-column gap-3">
          @forelse($lainnya as $l)
            <a href="{{ route('artikel.show', $l->id) }}" class="text-decoration-none">
              <div class="card border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                @include('partials.foto', ['url' => $l->foto_url, 'alt' => $l->judul, 'tinggi' => '130px'])
                <div class="card-body py-3">
                  <small class="text-secondary">{{ $l->created_at->format('d M Y') }}</small>
                  <div class="fw-semibold text-dark small">{{ $l->judul }}</div>
                </div>
              </div>
            </a>
          @empty
            <p class="text-secondary small">Belum ada artikel lain.</p>
          @endforelse
        </div>
      </div>

    </div>
  </div>
</section>
@endsection