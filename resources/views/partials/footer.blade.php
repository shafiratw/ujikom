<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

  .footer-container {
    background-color: #1e3a8a !important;
    color: #ffffff !important;
    font-family: 'Poppins', sans-serif !important;
    padding: 2.2rem 2rem !important;
    width: 100% !important;
    box-sizing: border-box !important;
  }

  .footer-content {
    display: flex !important;
    align-items: stretch !important;
    justify-content: space-between !important;
    max-width: 1280px !important;
    margin: 0 auto !important;
  }

  .footer-col {
    padding: 0 1.5rem !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    box-sizing: border-box !important;
  }

  .footer-col-1 {
    flex: 1.2 !important;
    padding-left: 0 !important;
    justify-content: center !important;
  }

  .footer-col-2 {
    flex: 1.7 !important;
  }

  .footer-col-3 {
    flex: 1.2 !important;
  }

  .footer-col-4 {
    flex: 1.1 !important;
    padding-right: 0 !important;
  }

  /* Garis pembatas vertikal */
  .footer-col:not(:last-child) {
    border-right: 1px solid rgba(255, 255, 255, 0.4) !important;
  }

  /* Brand Logo & Nama Sekolah */
  .brand-wrapper {
    display: flex !important;
    align-items: center !important;
    gap: 1.2rem !important;
  }

  .brand-logo {
    height: 65px !important;
    width: auto !important;
    object-fit: contain !important;
  }

  .brand-name {
    font-size: 1.15rem !important;
    font-weight: 700 !important;
    line-height: 1.2 !important;
    margin-bottom: 0.25rem !important;
    color: #ffffff !important;
  }

  .brand-motto {
    font-size: 0.6rem !important;
    font-weight: 400 !important;
    color: #ffffff !important;
    opacity: 0.9 !important;
    margin: 0 !important;
  }

  /* Judul Section (Alamat, Kontak, Jam Operasional) */
  .col-title {
    font-size: 1.1rem !important;
    font-weight: 700 !important;
    margin-bottom: 0.75rem !important;
    line-height: 1.2 !important;
    color: #ffffff !important;
  }

  /* Layout Ikon di Samping Teks (Sejajar) */
  .info-wrapper {
    display: flex !important;
    align-items: flex-start !important;
    gap: 0.6rem !important;
  }

  .info-icon {
    flex-shrink: 0 !important;
    margin-top: 2px !important;
    color: #ffffff !important;
    stroke: #ffffff !important;
  }

  .info-text-group {
    display: flex !important;
    flex-direction: column !important;
  }

  /* Teks Deskripsi dipastikan Putih dan Terlihat jelas */
  .info-text {
    font-size: 0.8rem !important;
    font-weight: 400 !important;
    line-height: 1.45 !important;
    margin: 0 !important;
    padding: 0 !important;
    color: #ffffff !important;
    opacity: 0.95 !important;
    display: block !important;
  }

  /* Responsive Mobile */
  @media (max-width: 991.98px) {
    .footer-content {
      flex-direction: column !important;
      gap: 1.5rem !important;
    }

    .footer-col {
      padding: 0 0 1.25rem 0 !important;
      border-right: none !important;
    }

    .footer-col:not(:last-child) {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
    }
  }
</style>

<footer class="footer-container">
  <div class="footer-content">

    <!-- Kolom 1: Logo & Nama Sekolah -->
    <div class="footer-col footer-col-1">
      <div class="brand-wrapper">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo SMKN 4 Bogor" class="brand-logo" onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png'">
        <div>
          <div class="brand-name">SMKN 4 BOGOR</div>
          <p class="brand-motto">Kreatif, Kompeten, Berkarakter</p>
        </div>
      </div>
    </div>

    <!-- Kolom 2: Alamat -->
    <div class="footer-col footer-col-2">
      <div class="col-title">Alamat</div>
      <div class="info-wrapper">
        <svg class="info-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <div class="info-text-group">
          <span class="info-text">
            Jl. Raya Tajur, Kp. Buntar RT.02/RW.08, Kel. Muara sari, Kec. Bogor Selatan, RT.03/RW.08, Muarasari, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16137
          </span>
        </div>
      </div>
    </div>

    <!-- Kolom 3: Kontak -->
    <div class="footer-col footer-col-3">
      <div class="col-title">Kontak</div>
      <div class="info-wrapper">
        <svg class="info-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
        <div class="info-text-group">
          <span class="info-text">(0251) 7547381</span>
          <span class="info-text">smkn4@smkn4bogor.sch.id</span>
        </div>
      </div>
    </div>

    <!-- Kolom 4: Jam Operasional -->
    <div class="footer-col footer-col-4">
      <div class="col-title">Jam Operasional</div>
      <div class="info-wrapper">
        <svg class="info-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <polyline points="12 6 12 12 16 14"/>
        </svg>
        <div class="info-text-group">
          <span class="info-text">Senin - Jumat</span>
          <span class="info-text">06.30 - 17.00 WIB</span>
        </div>
      </div>
    </div>

  </div>
</footer>