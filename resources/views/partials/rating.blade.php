<!-- PARTIAL: RATING PENGUNJUNG -->
<div class="card border-0 shadow-sm rounded-4 p-4 my-4 bg-white">
    <div class="mb-3">
        <h5 class="fw-bold m-0 text-dark d-flex align-items-center gap-2">
            <span class="badge bg-warning-subtle text-warning p-2 rounded-circle d-inline-flex">
                <i class="bi bi-star-fill fs-5"></i>
            </span>
            Berikan Penilaian Anda
        </h5>
        <p class="text-muted small mb-0 mt-1">Bantu kami untuk meningkatkan kualitas layanan informasi SMKN 4 Kota Bogor.</p>
    </div>

    @if(session('success_rating'))
        <div class="alert alert-success border-0 bg-success-subtle text-success rounded-3 mb-3 d-flex align-items-center gap-2 small">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <div>{{ session('success_rating') }}</div>
        </div>
    @endif

    <form action="{{ route('rating.store') }}" method="POST">
        @csrf

        <!-- Input Nama Pengunjung -->
        <div class="mb-3">
            <label class="form-label text-secondary small fw-semibold">Nama (Opsional)</label>
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
                <input type="text" name="nama_pengunjung" class="form-control bg-light border-start-0 ps-0" placeholder="Masukkan nama anda">
            </div>
        </div>

        <!-- Rating Bintang Interaktif -->
        <div class="mb-3">
            <label class="form-label d-block text-secondary small fw-semibold">Pilih Rating Bintang <span class="text-danger">*</span></label>
            <div class="star-rating d-inline-flex gap-2 text-warning fs-2">
                <input type="radio" name="bintang" value="1" id="star1" required class="d-none">
                <label for="star1" class="bi bi-star cursor-pointer" title="Sangat Buruk"></label>

                <input type="radio" name="bintang" value="2" id="star2" class="d-none">
                <label for="star2" class="bi bi-star cursor-pointer" title="Buruk"></label>

                <input type="radio" name="bintang" value="3" id="star3" class="d-none">
                <label for="star3" class="bi bi-star cursor-pointer" title="Cukup"></label>

                <input type="radio" name="bintang" value="4" id="star4" class="d-none">
                <label for="star4" class="bi bi-star cursor-pointer" title="Bagus"></label>

                <input type="radio" name="bintang" value="5" id="star5" class="d-none">
                <label for="star5" class="bi bi-star cursor-pointer" title="Sangat Bagus"></label>
            </div>
            @error('bintang')
                <small class="text-danger d-block mt-1">Silakan pilih minimal 1 bintang.</small>
            @enderror
        </div>

        <!-- Ulasan / Komentar -->
        <div class="mb-4">
            <label class="form-label text-secondary small fw-semibold">Ulasan & Masukan</label>
            <textarea name="ulasan" class="form-control bg-light" rows="3" placeholder="Tuliskan pengalaman atau saran anda mengenai website ini..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-semibold shadow-sm">
            <i class="bi bi-send-fill me-2"></i>Kirim Penilaian
        </button>
    </form>
</div>

<!-- Styling dan JavaScript Bintang -->
<style>
    .star-rating label { cursor: pointer; transition: transform 0.15s ease; }
    .star-rating label:hover { transform: scale(1.25); }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const starLabels = document.querySelectorAll('.star-rating label');
        const starInputs = document.querySelectorAll('.star-rating input');

        starLabels.forEach((label, index) => {
            label.addEventListener('mouseenter', () => highlightStars(index));
            label.parentElement.addEventListener('mouseleave', () => {
                const checkedInput = document.querySelector('.star-rating input:checked');
                if (checkedInput) {
                    highlightStars(Array.from(starInputs).indexOf(checkedInput));
                } else {
                    resetStars();
                }
            });
            label.addEventListener('click', () => {
                starInputs[index].checked = true;
                highlightStars(index);
            });
        });

        function highlightStars(index) {
            starLabels.forEach((star, i) => {
                if (i <= index) {
                    star.classList.remove('bi-star');
                    star.classList.add('bi-star-fill');
                } else {
                    star.classList.remove('bi-star-fill');
                    star.classList.add('bi-star');
                }
            });
        }

        function resetStars() {
            starLabels.forEach(star => {
                star.classList.remove('bi-star-fill');
                star.classList.add('bi-star');
            });
        }
    });
</script>