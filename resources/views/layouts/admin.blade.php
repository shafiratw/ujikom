<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') | Panel Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f1f5f9;
            color: #334155;
            display: block;
        }

        /* Sidebar dikunci di kiri, bisa discroll sendiri kalau menunya panjang */
        .admin-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 260px;
            overflow-y: auto;
            background: #0085ff;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1.5rem 1rem;
            z-index: 100;
        }

        /* Area isi: blok biasa, isinya selalu bertumpuk ke bawah */
        .admin-main {
            display: block !important;
            margin-left: 260px;
            min-height: 100vh;
            padding: 2rem;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: .9rem;
            padding: .75rem 1rem;
            color: #fff;
            text-decoration: none;
            border-radius: 12px;
            font-size: .9rem;
        }
        .side-link:hover { background: rgba(255,255,255,.15); color: #fff; }
        .side-link.active { background: #0066cc; font-weight: 600; }

        @media (max-width: 991px) {
            .admin-sidebar { position: static; width: 100%; }
            .admin-main { margin-left: 0; padding: 1rem; }
        }
    </style>
</head>
<body>

    @include('layouts.sidebar')

    <main class="admin-main">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>