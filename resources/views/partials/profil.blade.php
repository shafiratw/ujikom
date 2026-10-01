<section id="profil" class="py-5" style="background-color: #f8fafc; scroll-margin-top: 55px;">
  <div class="container">

    <!-- Card 1: Tentang Sekolah & Foto -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <div class="row align-items-stretch g-4">
        
        <!-- Kolom Kiri: Teks & Statistik -->
        <div class="col-lg-6 d-flex flex-column justify-content-between">
          <div>
            <h4 class="fw-bold mb-3" style="color: #1e3a8a;">Tentang Sekolah</h4>
            <p class="text-secondary lh-lg mb-4" style="font-size: 0.925rem;">
              SMKN 4 BOGOR merupakan sekolah kejuruan yang berkomitmen mencetak lulusan yang kompeten, berkarakter, dan siap menghadapi dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi. Dengan didukung tenaga pendidik yang profesional, fasilitas pembelajaran yang memadai, serta kerja sama dengan dunia usaha dan dunia industri.
            </p>
          </div>

          <!-- 3 Kotak Statistik (Seragam dan Rapi) -->
          <div class="row g-3 text-center">
            <!-- Tahun Berdiri -->
            <div class="col-4">
              <div class="p-3 bg-white border rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                <div class="mb-2 d-flex align-items-center justify-content-center" style="height: 40px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#1e3a8a" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    <path d="M4 7h2v2H4V7zm4 0h2v2H8V7zm4 0h2v2h-2V7zm-8 4h2v2H4v-2zm4 0h2v2H8v-2z"/>
                  </svg>
                </div>
                <span class="text-secondary fw-normal mb-1 d-block" style="font-size: 0.8rem;">Tahun Berdiri</span>
                <span class="fw-bold fs-3" style="color: #1e3a8a;">2008</span>
              </div>
            </div>

            <!-- Akreditasi -->
            <div class="col-4">
              <div class="p-3 bg-white border rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                <div class="mb-2 d-flex align-items-center justify-content-center" style="height: 40px;">
                  <i class="bi bi-patch-check-fill fs-2" style="color: #1e3a8a;"></i>
                </div>
                <span class="text-secondary fw-normal mb-1 d-block" style="font-size: 0.8rem;">Akreditasi</span>
                <span class="fw-bold fs-3" style="color: #1e3a8a;">A</span>
              </div>
            </div>

            <!-- Jurusan -->
            <div class="col-4">
              <div class="p-3 bg-white border rounded-4 shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                <div class="mb-2 d-flex align-items-center justify-content-center" style="height: 40px;">
                  <i class="bi bi-mortarboard-fill fs-2" style="color: #1e3a8a;"></i>
                </div>
                <span class="text-secondary fw-normal mb-1 d-block" style="font-size: 0.8rem;">Jurusan</span>
                <span class="fw-bold fs-3" style="color: #1e3a8a;">4</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Kolom Kanan: Foto Lapangan Sekolah -->
        <div class="col-lg-6">
          <div class="h-100 w-100 overflow-hidden rounded-4">
            <img src="{{ asset('images/smkn4.jpg') }}" 
                 alt="Lapangan SMKN 4 Bogor" 
                 class="img-fluid w-100 h-100 rounded-4" 
                 style="object-fit: cover; object-position: center; min-height: 320px;">
          </div>
        </div>

      </div>
    </div>

    <!-- Card 2: Visi & Misi -->
    <div class="card border-0 shadow-sm rounded-4 p-4">
      <div class="row g-4">
        
        <!-- Visi -->
        <div class="col-lg-6 pe-lg-4 border-end-lg">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px; background-color: #e0f2fe;">
              <i class="bi bi-eye-fill fs-5" style="color: #1e3a8a;"></i>
            </div>
            <h5 class="fw-bold mb-0" style="color: #1e3a8a;">Visi</h5>
          </div>
          
          <div class="p-3 rounded-3" style="background-color: #e0f2fe;">
            <p class="mb-0 lh-base" style="font-size: 0.925rem; color: #1e3a8a;">
              Menjadi sekolah kejuruan yang unggul, berkarakter, kompeten, berwawasan lingkungan, serta mampu menghasilkan lulusan yang siap bekerja, berwirausaha, dan melanjutkan pendidikan.
            </p>
          </div>
        </div>

        <!-- Misi -->
        <div class="col-lg-6 ps-lg-4">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px; background-color: #e0f2fe;">
              <i class="bi bi-bullseye fs-5" style="color: #1e3a8a;"></i>
            </div>
            <h5 class="fw-bold mb-0" style="color: #1e3a8a;">Misi</h5>
          </div>
          
          <ol class="ps-3 mb-0 lh-lg" style="font-size: 0.925rem; color: #334155;">
            <li>Menyelenggarakan pembelajaran yang berkualitas.</li>
            <li>Membentuk peserta didik yang berkarakter dan disiplin.</li>
            <li>Meningkatkan kompetensi sesuai kebutuhan industri.</li>
            <li>Menjalin kerja sama dengan dunia usaha dan dunia industri.</li>
            <li>Mewujudkan lingkungan sekolah yang aman, bersih, dan nyaman.</li>
          </ol>
        </div>

      </div>
    </div>

  </div>
</section>