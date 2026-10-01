<nav class="navbar navbar-expand-lg bg-white py-3 sticky-top shadow-sm">
  <div class="container">
    <!-- Logo & Brand Text -->
    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo SMKN 4 Bogor" height="40">
      <div class="d-flex flex-column">
        <span class="fw-bold text-dark lh-1" style="font-size: 1.05rem; letter-spacing: 0.5px;">SMKN 4 KOTA BOGOR</span>
        <small class="text-secondary fw-normal mt-1" style="font-size: 0.75rem;">Kreatif, Kompeten, Berkarakter</small>
      </div>
    </a>

    <!-- Toggle Mobile -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center gap-lg-4 fw-medium style-menu" style="font-size: 0.95rem;">
        <li class="nav-item">
          <a class="nav-link nav-scroll text-info fw-semibold border-bottom border-info border-2 pb-1 active" href="#hero">Beranda</a>
        </li>
        <li class="nav-item"><a class="nav-link nav-scroll text-secondary" href="#profil">Profil</a></li>
        <li class="nav-item"><a class="nav-link nav-scroll text-secondary" href="#jurusan">Jurusan</a></li>
        <li class="nav-item"><a class="nav-link nav-scroll text-secondary" href="#pengumuman">Pengumuman</a></li>
        <li class="nav-item"><a class="nav-link nav-scroll text-secondary" href="#galeri">Galeri</a></li>
        <li class="nav-item"><a class="nav-link nav-scroll text-secondary" href="#kontak">Kontak</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-info text-white rounded-3 px-4 py-2 d-flex align-items-center gap-2 shadow-sm" href="{{ url('/login') }}" style="background-color: #0099ff; border: none;">
            <i class="bi bi-person"></i> Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Script Auto Active Link -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const navLinks = document.querySelectorAll(".nav-scroll");

    function setActive(id) {
        navLinks.forEach(link => {
            link.classList.remove(
                "text-info",
                "fw-semibold",
                "border-bottom",
                "border-info",
                "border-2",
                "pb-1",
                "active"
            );

            link.classList.add("text-secondary");

            if (link.getAttribute("href") === "#" + id) {
                link.classList.remove("text-secondary");

                link.classList.add(
                    "text-info",
                    "fw-semibold",
                    "border-bottom",
                    "border-info",
                    "border-2",
                    "pb-1",
                    "active"
                );
            }
        });
    }

    function checkSection() {

        let current = "hero";

        const sections = [
            document.getElementById("hero"),
            document.getElementById("profil"),
            document.getElementById("jurusan"),
            document.getElementById("pengumuman"),
            document.getElementById("galeri"),
            document.getElementById("kontak")
        ];

        sections.forEach(section => {

            if (!section) return;

            const position = section.getBoundingClientRect();

            // Section dianggap aktif ketika melewati area navbar
            if (position.top <= 180) {
                current = section.id;
            }
        });

        setActive(current);
    }

    window.addEventListener("scroll", checkSection);

    // Cek saat halaman pertama dibuka
    checkSection();

});
</script>