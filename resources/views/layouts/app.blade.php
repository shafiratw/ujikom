<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title')@yield('title') | @endif{{ $profil->nama_perusahaan ?? 'PT Solusi Koneksi Anda' }}</title>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --biru: #0085ff;
            --biru-tua: #1e3a8a;
            --abu-muda: #f8fafc;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: #334155;
        }

        /* Navbar */
        .brand-icon {
            width: 42px; height: 42px;
            background: var(--biru);
            color: #fff;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
        }
        .navbar .nav-link {
            color: #64748b;
            font-weight: 500;
            font-size: 0.95rem;
            padding-bottom: 0.25rem;
            border-bottom: 2px solid transparent;
        }
        .navbar .nav-link:hover { color: var(--biru); }
        .navbar .nav-link.active {
            color: var(--biru);
            font-weight: 600;
            border-bottom-color: var(--biru);
        }

        /* Header halaman dalam (Profil, Layanan, dst) */
        .page-header {
            background: linear-gradient(135deg, var(--biru), var(--biru-tua));
            padding: 4rem 0;
        }

        /* Judul section */
        .section-title { color: var(--biru-tua); font-weight: 700; }
        .section-line {
            width: 48px; height: 4px;
            background: var(--biru);
            border-radius: 4px;
            margin: 0.5rem auto 0;
        }

        /* Kartu dengan efek hover */
        .card-hover { transition: transform .2s ease, box-shadow .2s ease; }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 .75rem 1.5rem rgba(0,0,0,.12) !important;
        }

        /* Tombol utama */
        .btn-biru {
            background: var(--biru);
            color: #fff;
            border: none;
        }
        .btn-biru:hover { background: #0069cc; color: #fff; }

        /* Footer */
        .footer {
            background: var(--biru);
            color: #ffffff;
        }
        .footer a { color: #ffffff; text-decoration: none; opacity: .9; }
        .footer a:hover { opacity: 1; text-decoration: underline; }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>