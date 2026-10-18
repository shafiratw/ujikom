@php
    // [label, nama route, pola route untuk menu aktif, ikon]
    $menu = [
        ['Dashboard',         'dashboard',           'dashboard',       'bi-speedometer2'],
        ['Profil Perusahaan', 'admin.profil.edit',   'admin.profil.*',  'bi-building'],
        ['Layanan',           'admin.layanan.index', 'admin.layanan.*', 'bi-hdd-network'],
        ['Artikel',           'admin.artikel.index', 'admin.artikel.*', 'bi-newspaper'],
        ['Galeri',            'admin.galeri.index',  'admin.galeri.*',  'bi-images'],
        ['Pesan Masuk',       'admin.pesan.index',   'admin.pesan.*',   'bi-envelope'],
    ];
@endphp

<aside class="admin-sidebar">
    <div>
        <!-- Brand -->
        <div class="d-flex align-items-center gap-2 mb-4 px-2">
            <span class="bg-white rounded-3 d-flex align-items-center justify-content-center p-1"
                style="width:44px;height:44px;">
                <img src="{{ asset('images/logo2.jpg') }}" alt="Logo" style="max-width:100%; max-height:100%;" onerror="this.style.display='none'">
            </span>
            <div>
                <div class="fw-bold" style="font-size:.95rem;">SOLUSI KONEKSI</div>
                <small style="opacity:.85;">Panel Admin</small>
            </div>
        </div>

        <hr style="border-color: rgba(255,255,255,.3);">

        <!-- Menu -->
        <nav class="d-flex flex-column gap-1">
            @foreach($menu as [$label, $route, $pola, $ikon])
                <a href="{{ route($route) }}" class="side-link {{ request()->routeIs($pola) ? 'active' : '' }}">
                    <i class="bi {{ $ikon }} fs-5"></i> {{ $label }}
                </a>
            @endforeach
        </nav>
    </div>

    <div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="side-link w-100 border-0 bg-transparent text-start">
                <i class="bi bi-box-arrow-right fs-5"></i> Keluar
            </button>
        </form>
    </div>
</aside>