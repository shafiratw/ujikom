@php
    // [label, nama route, pola route untuk penanda menu aktif]
    $menu = [
        ['Beranda',    'home',          'home'],
        ['Profil',  'profil',        'profil'],
        ['Layanan', 'layanan',       'layanan'],
        ['Artikel', 'artikel.index', 'artikel.*'],
        ['Galeri',  'galeri',        'galeri'],
        ['Kontak',  'kontak',        'kontak'],
    ];
@endphp

<nav class="navbar navbar-expand-lg bg-white py-3 sticky-top shadow-sm">
  <div class="container">

    <!-- Logo & nama perusahaan -->
    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
           <img src="{{ asset('images/logo2.jpg') }}" alt="Logo" style="height:44px; width:auto;" onerror="this.style.display='none'">
      <span class="d-flex flex-column">
        <span class="fw-bold text-dark lh-1" style="font-size: 1.05rem;">
          {{ strtoupper($profil->nama_perusahaan ?? 'PT Solusi Koneksi Anda') }}
        </span>
        <small class="text-secondary fw-normal mt-1 d-none d-md-block" style="font-size: 0.72rem;">
          {{ $profil->tagline ?? '' }}
        </small>
      </span>
    </a>

    <!-- Tombol menu untuk layar kecil -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Daftar menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-4">
        @foreach($menu as [$label, $route, $pola])
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs($pola) ? 'active' : '' }}" href="{{ route($route) }}">{{ $label }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>