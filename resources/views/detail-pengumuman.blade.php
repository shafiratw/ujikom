@php
    use App\Models\Pengumuman;

    $id = request()->route('id');

    $detail = Pengumuman::find($id);
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $detail?->judul ?? 'Detail Pengumuman' }} - SMKN 4 KOTA BOGOR
    </title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

   <style>
    /* =========================================
       BODY
    ========================================= */

    body {
        margin: 0;
        padding: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: #f8fafc;
        color: #334155;
    }


    /* =========================================
       CONTAINER UTAMA
    ========================================= */

    .container {
        width: 100%;
    }


    /* =========================================
       CARD DETAIL PENGUMUMAN
    ========================================= */

    .card.main-card {
        width: 100% !important;

        max-width: 850px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding: 28px !important;
        background: #ffffff !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 18px !important;
        box-shadow: 0 8px 25px rgba(15, 23, 42, 0.05) !important;
        overflow: hidden;
        box-sizing: border-box;
    }


    /* =========================================
       BARIS ATAS
    ========================================= */

    .card.main-card > div:first-child {
        margin-bottom: 14px !important;
    }


    /* =========================================
       BADGE
    ========================================= */

    .article-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 12px;
        background: #eff6ff;
        color: #2563eb;
        border: 1px solid #dbeafe;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }


    /* =========================================
       TANGGAL
    ========================================= */

    .card.main-card .text-muted {
        font-size: 12px !important;
        color: #64748b !important;
    }


    /* =========================================
       JUDUL
    ========================================= */

    .card.main-card h1 {
        margin-top: 5px !important;
        margin-bottom: 18px !important;
        font-size: 30px !important;
        line-height: 1.3 !important;
        font-weight: 800 !important;
        color: #1e293b !important;
    }


    /* =========================================
       GAMBAR
    ========================================= */

    .banner-container {
        position: relative;
        width: 100%;
        height: 300px;
        margin-bottom: 18px !important;
        overflow: hidden;
        border-radius: 14px;
        background: #f1f5f9;
        cursor: pointer;
    }


    .banner-img {
        display: block;
        width: 100% !important;
        height: 300px !important;
        max-height: 300px !important;
        object-fit: cover;
        transition:
        transform 0.3s ease,
        filter 0.3s ease;
    }


    .banner-container:hover .banner-img {
        transform: scale(1.015);
        filter: brightness(0.95);
    }


    /* =========================================
       TOMBOL ZOOM
    ========================================= */

    .zoom-overlay {
        position: absolute;
        right: 12px;
        bottom: 12px;
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 6px 11px;
        background: rgba(15, 23, 42, 0.75);
        color: white;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 500;
        backdrop-filter: blur(8px);
        opacity: 0.9;
        transition: 0.2s ease;
        pointer-events: none;
    }


    .banner-container:hover .zoom-overlay {
        opacity: 1;
        transform: translateY(-2px);
    }


    /* =========================================
       GARIS
    ========================================= */

    .card.main-card hr {
        margin-top: 18px !important;
        margin-bottom: 18px !important;
        border: 0;
        border-top: 1px solid #e2e8f0 !important;
        opacity: 1 !important;
    }


    /* =========================================
       ISI PENGUMUMAN
    ========================================= */

    .content-body {
        margin-bottom: 18px !important;
        font-size: 15px !important;
        line-height: 1.7 !important;
        color: #475569 !important;
        letter-spacing: 0;
        white-space: pre-line;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }


    /* =========================================
       SEMUA TOMBOL
    ========================================= */

    .card.main-card .btn {
        font-size: 12px;
        padding: 7px 14px !important;
        border-radius: 50px !important;
        font-weight: 600;
        transition: all 0.2s ease;
    }


    /* =========================================
       TOMBOL KEMBALI
    ========================================= */

    .btn-back {
        display: inline-flex;
        align-items: center;
        background: #ffffff;
        color: #475569;
        border: 1px solid #e2e8f0;
        font-weight: 600;
        font-size: 12px;
        transition: all 0.2s ease;
    }


    .btn-back:hover {
        background: #2563eb;
        color: #ffffff;
        border-color: #2563eb;
        transform: translateX(-3px);
    }


    /* =========================================
       TOMBOL BERANDA
    ========================================= */

    .card.main-card .btn-primary {
        background: #2563eb;
        border-color: #2563eb;
        color: #ffffff;
        font-size: 12px;
    }


    .card.main-card .btn-primary:hover {
        background: #1d4ed8;
        border-color: #1d4ed8;
        transform: translateY(-2px);
    }


    /* =========================================
       FOOTER CARD
    ========================================= */

    .card.main-card > .d-flex:last-child {
        margin-top: 0 !important;
        gap: 10px !important;
    }


    /* =========================================
       MODAL FOTO
    ========================================= */

    .modal-backdrop.show {
        opacity: 0.85 !important;
        background: #000000;
    }


    .modal-content-clean {
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }


    .modal-clean-body {
        position: relative;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .modal-clean-body img {
        display: block;
        width: auto;
        max-width: 95%;
        max-height: 85vh;
        object-fit: contain;
        border-radius: 10px;
        box-shadow:
            0 15px 40px rgba(0, 0, 0, 0.6);
    }


    /* =========================================
       CLOSE MODAL
    ========================================= */

    .btn-close-floating {
        position: absolute;
        top: -38px;
        right: 0;
        width: 32px;
        height: 32px;
        padding: 8px;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        opacity: 1;
        backdrop-filter: blur(5px);
        transition: 0.2s ease;
    }


    .btn-close-floating:hover {
        background-color: rgba(255, 255, 255, 0.5);
        transform: scale(1.05);
    }


    /* =========================================
       CONTAINER ATAS
    ========================================= */

    .container.py-4.py-md-5 {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }


    /* =========================================
       RESPONSIVE TABLET
    ========================================= */

    @media (max-width: 992px) {

        .card.main-card {
            max-width: 750px !important;
            padding: 24px !important;
        }

        .banner-container {
            height: 280px;
        }

        .banner-img {
            height: 280px !important;
            max-height: 280px !important;
        }

        .card.main-card h1 {
            font-size: 27px !important;
        }
    }


    /* =========================================
       RESPONSIVE HP
    ========================================= */

    @media (max-width: 768px) {

        .card.main-card {
            width: 100% !important;
            max-width: 100% !important;
            padding: 20px !important;
            border-radius: 15px !important;
        }


        .card.main-card h1 {
            font-size: 24px !important;
            margin-bottom: 15px !important;
        }


        .banner-container {
            height: 240px;

            border-radius: 12px;
        }


        .banner-img {
            height: 240px !important;

            max-height: 240px !important;
        }


        .content-body {
            font-size: 14px !important;

            line-height: 1.65 !important;
        }
    }


    /* =========================================
       HP KECIL
    ========================================= */

    @media (max-width: 576px) {

        .container.py-4.py-md-5 {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }


        .card.main-card {
            padding: 16px !important;
            border-radius: 13px !important;
        }


        .card.main-card h1 {
            font-size: 21px !important;
        }


        .banner-container {
            height: 200px;
        }


        .banner-img {
            height: 200px !important;
            max-height: 200px !important;
        }


        .article-badge {
            font-size: 10px;
            padding: 4px 9px;
        }


        .card.main-card .text-muted {
            font-size: 10px !important;
        }


        .content-body {
            font-size: 13px !important;
            line-height: 1.6 !important;
        }


        .card.main-card .btn {
            font-size: 10px;
            padding: 6px 10px !important;
        }


        .zoom-overlay {
            font-size: 9px;
            padding: 5px 8px;
        }
    }
</style>

<body>

    <!-- KONTEN UTAMA -->
    <div class="container py-4 py-md-5">

        <!-- NAVIGASI -->
        <div class="d-flex align-items-center justify-content-between mb-4">

            <a href="javascript:history.back()"
               class="btn btn-back px-4 py-2 rounded-pill shadow-sm">

                <i class="bi bi-arrow-left me-2"></i>
                Kembali

            </a>

            <span class="text-muted small fw-semibold">
                SMKN 4 KOTA BOGOR
            </span>

        </div>


        @if($detail)

            <!-- ARTICLE -->
            <article class="card main-card p-4 p-md-5">

                <!-- META -->
                <div class="mb-3 d-flex flex-wrap align-items-center gap-3">

                    <span class="article-badge">
                        <i class="bi bi-megaphone-fill"></i>
                        Pengumuman Resmi
                    </span>

                    <span class="text-muted small fw-medium">

                        <i class="bi bi-calendar3 me-1 text-primary"></i>

                        @if($detail->created_at)
                            {{ $detail->created_at->isoFormat('D MMMM Y') }}
                        @else
                            -
                        @endif

                    </span>

                </div>


                <!-- JUDUL -->
                <h1
                    class="fw-extrabold text-dark display-6 mb-4"
                    style="line-height: 1.3; font-weight: 800;"
                >
                    {{ $detail->judul }}
                </h1>


                <!-- FOTO -->
                @if(!empty($detail->foto))

                    <div
                        class="banner-container mb-4 shadow-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal"
                        title="Klik untuk memperbesar gambar"
                    >

                        <img
                            src="{{ asset('storage/' . $detail->foto) }}"
                            class="banner-img"
                            alt="{{ $detail->judul }}"
                        >

                        <div class="zoom-overlay">

                            <i class="bi bi-zoom-in"></i>

                            Klik untuk memperbesar

                        </div>

                    </div>

                @endif


                <!-- GARIS -->
                <hr class="my-4 border-secondary opacity-10">


                <!-- DESKRIPSI -->
                <div class="content-body mb-4">

                    {{ $detail->deskripsi }}

                </div>


                <!-- FOOTER -->
                <hr class="my-4 border-secondary opacity-10">

                <div
                    class="d-flex flex-wrap align-items-center justify-content-between gap-3"
                >

                    <div></div>

                    <div>

                        <a
                            href="/"
                            class="btn btn-primary px-4 py-2 rounded-pill fw-semibold shadow-sm"
                        >

                            <i class="bi bi-house-door me-2"></i>

                            Beranda Utama

                        </a>

                    </div>

                </div>

            </article>


            <!-- MODAL FOTO -->
            @if(!empty($detail->foto))

                <div
                    class="modal fade"
                    id="imageModal"
                    tabindex="-1"
                    aria-hidden="true"
                >

                    <div class="modal-dialog modal-dialog-centered modal-xl">

                        <div class="modal-content modal-content-clean">

                            <div class="modal-body modal-clean-body">

                                <!-- CLOSE -->
                                <button
                                    type="button"
                                    class="btn-close btn-close-white btn-close-floating"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>


                                <!-- FOTO BESAR -->
                                <img
                                    src="{{ asset('storage/' . $detail->foto) }}"
                                    alt="{{ $detail->judul }}"
                                >

                            </div>

                        </div>

                    </div>

                </div>

            @endif


        @else

            <!-- DATA TIDAK DITEMUKAN -->
            <div class="text-center py-5 bg-white rounded-4 shadow-sm p-5">

                <i
                    class="bi bi-exclamation-circle text-warning display-1"
                ></i>

                <h4 class="mt-3 fw-bold">
                    Pengumuman tidak ditemukan
                </h4>

                <p class="text-muted">
                    Data pengumuman yang Anda cari tidak tersedia
                    atau telah dihapus.
                </p>

                <a
                    href="/"
                    class="btn btn-primary rounded-pill px-4 mt-2"
                >
                    Kembali ke Beranda
                </a>

            </div>

        @endif

    </div>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
