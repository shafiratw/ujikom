<footer class="footer pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row g-4">

      <!-- Kolom 1: identitas perusahaan -->
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-3">
          <span class="bg-white rounded-3 p-1 d-inline-flex">
            <img src="{{ asset('images/logo2.jpg') }}" alt="Logo" style="height:36px; width:auto;" onerror="this.style.display='none'">
          </span>
          <span class="fw-bold text-white fs-6">{{ $profil->nama_perusahaan ?? 'PT Solusi Koneksi Anda' }}</span>
        </div>
        <p class="small mb-0" style="line-height: 1.8;">
          {{ $profil->tagline ?? '' }}. Kami menyediakan layanan konektivitas dan infrastruktur jaringan yang stabil, aman, dan terjangkau.
        </p>
      </div>

      <!-- Kolom 2: menu cepat -->
      <div class="col-6 col-lg-3 offset-lg-1">
        <h6 class="text-white fw-semibold mb-3">Menu</h6>
        <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
          <li><a href="{{ route('home') }}">Beranda</a></li>
          <li><a href="{{ route('profil') }}">Profil Perusahaan</a></li>
          <li><a href="{{ route('layanan') }}">Layanan</a></li>
          <li><a href="{{ route('artikel.index') }}">Artikel</a></li>
          <li><a href="{{ route('galeri') }}">Galeri Kegiatan</a></li>
          <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
        </ul>
      </div>

      <!-- Kolom 3: kontak -->
      <div class="col-6 col-lg-4">
        <h6 class="text-white fw-semibold mb-3">Hubungi Kami</h6>
        <ul class="list-unstyled small mb-0 d-flex flex-column gap-3">
          <li class="d-flex gap-2">
            <i class="bi bi-geo-alt-fill text-white"></i>
            <span>Jl. Raya Pajajaran No. 88 F Kota Bogor 16153</span>
          </li>
          <li class="d-flex gap-2">
            <i class="bi bi-telephone-fill text-white"></i>
            <span>+62 812-3456-7890</span>
          </li>
          <li class="d-flex gap-2">
            <i class="bi bi-envelope-fill text-white"></i>
           <span>info@solusikoneksianda.co.id</span>
          </li>
        </ul>
      </div>
    </div>

    <hr class="my-4" style="border-color: rgba(255,255,255,.4);">
    <p class="text-center small mb-0">
      &copy; {{ date('Y') }} {{ $profil->nama_perusahaan ?? 'PT Solusi Koneksi Anda' }}. Seluruh hak cipta dilindungi.
    </p>
  </div>
</footer>