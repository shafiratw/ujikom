<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

  .contact-section-wrapper {
    font-family: 'Poppins', sans-serif !important;
    background-color: #ffffff !important;
    padding: 4rem 1.5rem !important;
    width: 100% !important;
    box-sizing: border-box !important;
  }

  .contact-section-container {
    max-width: 1100px !important;
    margin: 0 auto !important;
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 3.5rem !important;
  }

  /* ================= KIRI: INFORMASI KONTAK ================= */
  .section-main-title {
    font-size: 2.2rem !important;
    font-weight: 700 !important;
    color: #1e3a8a !important;
    margin-bottom: 2rem !important;
    line-height: 1.2 !important;
  }

  .contact-list-box {
    display: flex !important;
    flex-direction: column !important;
  }

  .contact-row-item {
    display: flex !important;
    align-items: flex-start !important;
    gap: 1.2rem !important;
    margin-bottom: 1.2rem !important;
  }

  .contact-icon-square {
    width: 48px !important;
    height: 48px !important;
    background-color: #e0f2fe !important;
    border-radius: 12px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
  }

  .contact-icon-square svg {
    width: 22px !important;
    height: 22px !important;
    color: #1e3a8a !important;
    stroke: #1e3a8a !important;
  }

  .contact-content-detail {
    display: flex !important;
    flex-direction: column !important;
    flex: 1 !important;
    border-bottom: 1px solid #e5e7eb !important;
    padding-bottom: 1.2rem !important;
  }

  .contact-item-title {
    font-size: 1.05rem !important;
    font-weight: 700 !important;
    color: #1e3a8a !important;
    margin-bottom: 0.2rem !important;
    line-height: 1.2 !important;
  }

  .contact-item-text {
    font-size: 0.875rem !important;
    color: #1e3a8a !important;
    line-height: 1.45 !important;
    margin: 0 !important;
  }

  .contact-link-email {
    color: #1e3a8a !important;
    text-decoration: underline !important;
  }

  /* Peta Mini Kiri Bawah */
  .mini-map-card {
    display: block !important;
    margin-top: 1.2rem !important;
    width: 100% !important;
    height: 160px !important;
    border-radius: 12px !important;
    overflow: hidden !important;
    border: 1px solid #d1d5db !important;
    position: relative !important;
    text-decoration: none !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05) !important;
    cursor: pointer !important;
  }

  .mini-map-card:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1) !important;
  }

  /* Lapisan transparan agar seluruh kotak peta bisa diklik */
  .map-overlay-click {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    z-index: 5 !important;
    background: transparent !important;
  }

  .mini-map-card iframe {
    width: 100% !important;
    height: 100% !important;
    border: 0 !important;
    pointer-events: none !important;
  }

  /* ================= KANAN: KIRIM PESAN ================= */
  .title-with-underline {
    display: inline-block !important;
    position: relative !important;
  }

  .title-with-underline::after {
    content: '' !important;
    position: absolute !important;
    left: 0 !important;
    bottom: -6px !important;
    width: 100% !important;
    height: 3px !important;
    background-color: #2563eb !important;
    border-radius: 2px !important;
  }

  .form-sub-header {
    font-size: 0.875rem !important;
    color: #1e3a8a !important;
    margin-bottom: 1.25rem !important;
    margin-top: 0.5rem !important;
  }

  .input-field-group {
    margin-bottom: 1.1rem !important;
  }

  .input-field-label {
    display: block !important;
    font-size: 0.95rem !important;
    font-weight: 700 !important;
    color: #1e3a8a !important;
    margin-bottom: 0.4rem !important;
  }

  .input-with-icon {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
  }

  .input-left-icon {
    position: absolute !important;
    left: 14px !important;
    color: #9ca3af !important;
    stroke: #9ca3af !important;
    pointer-events: none !important;
  }

  .custom-form-input, 
  .custom-form-textarea {
    width: 100% !important;
    padding: 0.7rem 0.85rem 0.7rem 2.6rem !important;
    border: 1px solid #d1d5db !important;
    border-radius: 8px !important;
    font-size: 0.875rem !important;
    font-family: inherit !important;
    outline: none !important;
    box-sizing: border-box !important;
    color: #374151 !important;
  }

  .custom-form-input::placeholder,
  .custom-form-textarea::placeholder {
    color: #c4c4c4 !important;
  }

  .custom-form-textarea {
    padding-top: 0.7rem !important;
    resize: vertical !important;
    min-height: 90px !important;
  }

  /* Tombol Kirim Kanan */
  .btn-submit-wrapper {
    display: flex !important;
    justify-content: flex-end !important;
    margin-bottom: 1.5rem !important;
  }

  .btn-blue-submit {
    background-color: #1e3a8a !important;
    color: #ffffff !important;
    border: none !important;
    padding: 0.55rem 2.4rem !important;
    font-size: 0.95rem !important;
    font-weight: 600 !important;
    border-radius: 8px !important;
    cursor: pointer !important;
  }

  .btn-blue-submit:hover {
    background-color: #172554 !important;
  }

  /* Card Ikuti Kami */
  .social-media-card {
    border: 1px solid #d1d5db !important;
    border-radius: 12px !important;
    padding: 1rem 1.25rem !important;
    background-color: #ffffff !important;
  }

  .social-card-title {
    font-size: 1rem !important;
    font-weight: 700 !important;
    color: #1e3a8a !important;
    margin-bottom: 0.6rem !important;
  }

  .social-items-inline {
    display: flex !important;
    align-items: center !important;
    gap: 1.5rem !important;
    flex-wrap: wrap !important;
  }

  .social-link-item {
    display: flex !important;
    align-items: center !important;
    gap: 0.5rem !important;
    text-decoration: none !important;
    color: #1e3a8a !important;
    font-size: 0.85rem !important;
    font-weight: 700 !important;
  }

  .social-link-item:hover {
    opacity: 0.8;
  }

  /* Responsive Mobile */
  @media (max-width: 868px) {
    .contact-section-container {
      grid-template-columns: 1fr !important;
      gap: 2.5rem !important;
    }
  }
</style>

<div class="contact-section-wrapper" id="kontak">
  <div class="contact-section-container">

    <!-- KOLOM KIRI: Informasi Kontak -->
    <div>
      <h2 class="section-main-title">Informasi Kontak</h2>

      <div class="contact-list-box">
        <!-- 1. Alamat -->
        <div class="contact-row-item">
          <div class="contact-icon-square">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div class="contact-content-detail">
            <span class="contact-item-title">Alamat</span>
            <p class="contact-item-text">
              Jl. Raya Tajur, Kp. Buntar RT.02/RW.08, Kel. Muara sari, Kec. Bogor Selatan, RT.03/RW.08, Muarasari, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16137
            </p>
          </div>
        </div>

        <!-- 2. Telepon -->
        <div class="contact-row-item">
          <div class="contact-icon-square">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div class="contact-content-detail">
            <span class="contact-item-title">Telepon</span>
            <p class="contact-item-text">(0251) 7547381</p>
          </div>
        </div>

        <!-- 3. Email -->
        <div class="contact-row-item">
          <div class="contact-icon-square">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          </div>
          <div class="contact-content-detail">
            <span class="contact-item-title">Email</span>
            <p class="contact-item-text">
              <a href="mailto:smkn4@smkn4bogor.sch.id" class="contact-link-email">smkn4@smkn4bogor.sch.id</a>
            </p>
          </div>
        </div>

        <!-- 4. Jam Operasional -->
        <div class="contact-row-item" style="border-bottom: none; margin-bottom: 0;">
          <div class="contact-icon-square">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div class="contact-content-detail" style="border-bottom: none; padding-bottom: 0;">
            <span class="contact-item-title">Jam Operasional</span>
            <p class="contact-item-text">Senin - Jumat</p>
            <p class="contact-item-text">06.30 - 17.00 WIB</p>
          </div>
        </div>
      </div>

      <!-- Kotak Maps yang langsung mengarah ke Google Maps resmi -->
      <a href="https://maps.google.com/?q=SMK+Negeri+4+Bogor+(Nebrazka)" target="_blank" class="mini-map-card" title="Klik untuk membuka Google Maps">
        <div class="map-overlay-click"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.2973576632103!2d106.82217867922216!3d-6.641094819912628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMK%20Negeri%204%20Bogor%20(Nebrazka)!5e0!3m2!1sid!2sid!4v1788486332897!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </a>
    </div>

    <!-- KOLOM KANAN: Kirim Pesan & Ikuti Kami -->
    <div>
      <h2 class="section-main-title title-with-underline">Kirim Pesan</h2>
      <p class="form-sub-header">Silahkan kirim pesan atau pertanyaan anda kepada kami.</p>

      <form action="{{ route('kontak.store') }}" method="POST">
        @csrf
        <!-- Nama Lengkap -->
        <div class="input-field-group">
          <label class="input-field-label">Nama Lengkap</label>
          <div class="input-with-icon">
            <svg class="input-left-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <input type="text" name="nama" class="custom-form-input" placeholder="Masukan nama lengkap" required>
          </div>
        </div>

        <!-- Email -->
        <div class="input-field-group">
          <label class="input-field-label">Email</label>
          <div class="input-with-icon">
            <svg class="input-left-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            <input type="email" name="email" class="custom-form-input" placeholder="Masukan email" required>
          </div>
        </div>

        <!-- Pesan -->
        <div class="input-field-group">
          <label class="input-field-label">Pesan</label>
          <div class="input-with-icon">
            <svg class="input-left-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="top: 12px;"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            <textarea name="pesan" class="custom-form-textarea" placeholder="Tulis pesan anda di sini..." required></textarea>
          </div>
        </div>

        <!-- Tombol Kirim -->
        <div class="btn-submit-wrapper">
          <button type="submit" class="btn-blue-submit">Kirim</button>
        </div>
      </form>

      <!-- Ikuti Kami -->
      <div class="social-media-card">
        <div class="social-card-title">Ikuti Kami :</div>
        <div class="social-items-inline">
          <!-- Instagram -->
          <a href="https://www.instagram.com/smkn4kotabogor" target="_blank" class="social-link-item">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" fill="url(#ig-grad)"/>
              <defs>
                <radialGradient id="ig-grad" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(4.8 21.6) scale(22.8)">
                  <stop offset="0" stop-color="#fdf497"/>
                  <stop offset="0.05" stop-color="#fdf497"/>
                  <stop offset="0.45" stop-color="#fd5949"/>
                  <stop offset="0.6" stop-color="#d6249f"/>
                  <stop offset="0.9" stop-color="#285AEB"/>
                </radialGradient>
              </defs>
            </svg>
            @smkn4kotabogor
          </a>

          <!-- Youtube -->
          <a href="https://www.youtube.com/@smknegeri4bogor905" target="_blank" class="social-link-item">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="#FF0000">
              <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
            </svg>
            @smknegeri4bogor905
          </a>
        </div>
      </div>
    </div>

  </div>
</div>