    @extends('layouts.app')

    @section('title', 'Beranda')

    @section('content')

{{-- HERO --}}
<style>
    .hero-full {
    display: flex;
    align-items: center;
    min-height: calc(100vh - 84px);
    padding: 3rem 0;
    background:
      linear-gradient(90deg, rgba(5, 20, 50, .70) 0%, rgba(5, 20, 50, .35) 55%, rgba(5, 20, 50, .10) 100%),
      url('{{ asset('images/baground.jpg') }}') center / cover no-repeat,
      #0b3d91;
  }

  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: .55rem;
    padding: .45rem 1.1rem;
    border-radius: 50px;
    background: rgba(10, 30, 70, .45);
    border: 1px solid rgba(255, 255, 255, .3);
    color: #ffffff;
    font-size: .85rem;
    font-weight: 500;
    letter-spacing: .3px;
  }

  .hero-badge .dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #1a73ff;
  }

   .hero-title {
    font-weight: 600;
    color: #ffffff;
    line-height: 1.15;
    font-size: clamp(2rem, 5vw, 3.6rem);
    margin: 1.4rem 0 1.2rem;
    text-shadow: 0 2px 12px rgba(0, 0, 0, .35);
  }

  .hero-title span { color: #5b9dff; }

    .hero-desc {
    color: rgba(255, 255, 255, .9);
    max-width: 640px;
    line-height: 1.8;
    margin-bottom: 1.8rem;
    text-shadow: 0 2px 10px rgba(0, 0, 0, .35);
  }

  .btn-hero,
  .btn-hero-outline {
    display: inline-block;
    padding: .8rem 1.8rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: .95rem;
    text-decoration: none;
    transition: all .2s ease;
  }

  .btn-hero { background: #1a73ff; color: #ffffff; border: 1px solid #1a73ff; }
  .btn-hero:hover { background: #0f5fe0; color: #ffffff; }

  .btn-hero-outline { background: transparent; color: #ffffff; border: 1px solid rgba(255, 255, 255, .8); }
  .btn-hero-outline:hover { background: rgba(255, 255, 255, .15); color: #ffffff; }
</style>

<section class="hero-full">
  <div class="container">
    <span class="hero-badge">
      <span class="dot"></span>
      {{ strtoupper($profil->nama_perusahaan) }}
    </span>

    <h1 class="hero-title">
      Menghubungkan Kebutuhan<br>
      <span>Dengan Solusi Terbaik</span>
    </h1>

    <p class="hero-desc">
      Kami hadir memberikan integrasi produk, layanan berkualitas, dan dukungan profesional
      yang dirancang khusus untuk memajukan skala bisnis anda.
    </p>

    <a href="{{ route('profil') }}" class="btn-hero me-2 mb-2">Tentang Kami &rarr;</a>
    <a href="{{ route('kontak') }}" class="btn-hero-outline mb-2">Hubungi Kami</a>
  </div>
</section>

    {{-- TENTANG KAMI --}}
    <section class="py-5" style="background: var(--abu-muda);">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <h2 class="section-title mb-3">Tentang Kami</h2>
            <p class="text-secondary lh-lg">{{ \Illuminate\Support\Str::limit($profil->tentang, 330) }}</p>
            <a href="{{ route('profil') }}" class="btn btn-biru rounded-3 px-4">Selengkapnya</a>
          </div>
          <div class="col-lg-6">
          <div class="position-relative">
            <div class="rounded-4 overflow-hidden shadow">
              <img src="{{ asset('images/tentang.jpg') }}" alt="Tentang Kami" class="w-100" style="height:380px; object-fit:cover;">
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- LAYANAN --}}
    <section class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Layanan Kami</h2>
          <div class="section-line"></div>
          <p class="text-secondary mt-3">Solusi konektivitas yang kami tawarkan untuk rumah dan usaha anda.</p>
        </div>

        <div class="row g-4">
          @forelse($produks as $p)
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                @include('partials.foto', ['url' => $p->foto_url, 'alt' => $p->nama, 'tinggi' => '170px'])
                <div class="card-body">
                  <h6 class="fw-bold" style="color: var(--biru-tua);">{{ $p->nama }}</h6>
                  <p class="small text-secondary mb-0">{{ \Illuminate\Support\Str::limit($p->deskripsi, 90) }}</p>
                </div>
              </div>
            </div>
          @empty
            <p class="text-center text-secondary">Belum ada layanan.</p>
          @endforelse
        </div>

        <div class="text-center mt-4">
          <a href="{{ route('layanan') }}" class="btn btn-outline-primary rounded-3 px-4">Lihat Semua Layanan</a>
        </div>
      </div>
    </section>

    {{-- ARTIKEL TERBARU --}}
    <section class="py-5" style="background: var(--abu-muda);">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Artikel &amp; Informasi Terkini</h2>
          <div class="section-line"></div>
        </div>

        <div class="row g-4">
          @forelse($artikels as $a)
            <div class="col-md-4">
              <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                @include('partials.foto', ['url' => $a->foto_url, 'alt' => $a->judul, 'tinggi' => '190px'])
                <div class="card-body d-flex flex-column">
                  <small class="text-secondary mb-1"><i class="bi bi-calendar3 me-1"></i>{{ $a->created_at->format('d M Y') }}</small>
                  <h6 class="fw-bold" style="color: var(--biru-tua);">{{ $a->judul }}</h6>
                  <p class="small text-secondary">{{ \Illuminate\Support\Str::limit(strip_tags($a->isi), 100) }}</p>
                  <a href="{{ route('artikel.show', $a->id) }}" class="mt-auto small fw-semibold text-decoration-none">Baca selengkapnya &rarr;</a>
                </div>
              </div>
            </div>
          @empty
            <p class="text-center text-secondary">Belum ada artikel.</p>
          @endforelse
        </div>

        <div class="text-center mt-4">
          <a href="{{ route('artikel.index') }}" class="btn btn-outline-primary rounded-3 px-4">Lihat Semua Artikel</a>
        </div>
      </div>
    </section>

    {{-- GALERI --}}
    <section class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Galeri Kegiatan</h2>
          <div class="section-line"></div>
        </div>

        <div class="row g-3">
          @forelse($galeris as $g)
            <div class="col-6 col-md-4">
              <div class="rounded-4 overflow-hidden shadow-sm card-hover">
                @include('partials.foto', ['url' => $g->foto_url, 'alt' => $g->judul, 'tinggi' => '220px'])
              </div>
            </div>
          @empty
            <p class="text-center text-secondary">Belum ada foto.</p>
          @endforelse
        </div>

        <div class="text-center mt-4">
          <a href="{{ route('galeri') }}" class="btn btn-outline-primary rounded-3 px-4">Lihat Semua Galeri</a>
        </div>
      </div>
    </section>

    {{-- AJAKAN KONTAK --}}
  <section class="text-white text-center d-flex align-items-center"
          style="min-height: 340px;
                  background:
                    linear-gradient(rgba(5, 20, 50, .45), rgba(5, 20, 50, .45)),
                    url('{{ asset('images/bg2.jpg') }}') center / cover no-repeat,
                    #0b3d91;">
    <div class="container py-5">
      <h3 class="fw-bold mb-2" style="font-size: clamp(1.5rem, 3vw, 2.2rem); text-shadow: 0 2px 8px rgba(0,0,0,.4);">Siap Terhubung Bersama Kami?</h3>
      <p class="mb-4" style="text-shadow: 0 2px 8px rgba(0,0,0,.4);">Konsultasikan kebutuhan internet dan jaringan anda secara gratis.</p>
      <a href="{{ route('kontak') }}" class="btn btn-light btn-lg rounded-pill px-5 fw-semibold">Hubungi Kami</a>
    </div>
  </section>

    @endsection