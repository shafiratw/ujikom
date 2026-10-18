@php
    // Foto bisa diganti per halaman lewat parameter 'foto'. Kalau tidak diisi, dipakai foto bawaan.
    $gambar = $foto ?? 'bg2.jpg';
@endphp

<section class="page-header text-white text-center d-flex align-items-center"
         style="min-height: 280px;
                background:
                  linear-gradient(rgba(5, 20, 50, .50), rgba(5, 20, 50, .50)),
                  url('{{ asset('images/' . $gambar) }}') center / cover no-repeat,
                  #0b3d91;">
  <div class="container">
    <h1 class="fw-bold mb-2" style="text-shadow: 0 2px 10px rgba(0,0,0,.4);">{{ $judul }}</h1>
    @isset($subjudul)
      <p class="mb-0" style="text-shadow: 0 2px 10px rgba(0,0,0,.4);">{{ $subjudul }}</p>
    @endisset
  </div>
</section>