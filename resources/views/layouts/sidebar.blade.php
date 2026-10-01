<!-- 1. SIDEBAR KIRI (Biru) -->
<div style="width: 280px; min-width: 280px; background-color: #0085ff; color: #ffffff; display: flex; flex-direction: column; justify-content: space-between; padding: 2rem 1.25rem; height: 100%;">
    <div>
        <!-- Brand / Logo SMK dengan Buletan Putih -->
        <div style="display: flex; align-items: center; gap: 0.85rem; margin-bottom: 2rem; padding-left: 0.5rem;">
            <div style="width: 46px; height: 46px; min-width: 46px; background-color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 30px; height: auto;" onerror="this.src='https://via.placeholder.com/30'">
            </div>
            <div>
                <h3 style="font-size: 0.95rem; font-weight: 700; margin: 0; color: #ffffff; letter-spacing: 0.3px;">SMKN 4 BOGOR</h3>
                <span style="font-size: 0.75rem; color: rgba(255, 255, 255, 0.85);">Panel Admin</span>
            </div>
        </div>

        <div style="border-bottom: 1px solid rgba(255, 255, 255, 0.2); margin-bottom: 1.5rem;"></div>

        <!-- Menu Navigasi -->
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <a href="{{ url('/dashboard') }}" style="display: flex; align-items: center; gap: 1rem; padding: 0.85rem 1.15rem; {{ Request::is('dashboard*') ? 'background: #0066cc; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.1);' : '' }} color: #ffffff; text-decoration: none; border-radius: 12px; font-size: 0.9rem;">
                <i class="bi bi-house-door-fill" style="font-size: 1.15rem;"></i> Dashboard
            </a>
            <a href="{{ url('/pengumuman') }}" style="display: flex; align-items: center; gap: 1rem; padding: 0.85rem 1.15rem; {{ Request::is('pengumuman*') ? 'background: #0066cc; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.1);' : '' }} color: #ffffff; text-decoration: none; border-radius: 12px; font-size: 0.9rem;">
                <i class="bi bi-megaphone-fill" style="font-size: 1.15rem;"></i> Pengumuman
            </a>
            <a href="{{ url('/galeri') }}" style="display: flex; align-items: center; gap: 1rem; padding: 0.85rem 1.15rem; {{ Request::is('galeri*') ? 'background: #0066cc; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.1);' : '' }} color: #ffffff; text-decoration: none; border-radius: 12px; font-size: 0.9rem;">
                <i class="bi bi-image-fill" style="font-size: 1.15rem;"></i> Galeri
            </a>
            <a href="{{ url('/kontak') }}" style="display: flex; align-items: center; gap: 1rem; padding: 0.85rem 1.15rem; {{ Request::is('kontak*') ? 'background: #0066cc; font-weight: 600; box-shadow: 0 2px 4px rgba(0,0,0,0.1);' : '' }} color: #ffffff; text-decoration: none; border-radius: 12px; font-size: 0.9rem;">
                <i class="bi bi-envelope-fill" style="font-size: 1.15rem;"></i> Kontak
            </a>
        </div>
    </div>

    <!-- Tombol Keluar -->
    <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 1.25rem;">
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button type="submit" style="display: flex; align-items: center; gap: 1rem; padding: 0.85rem 1.15rem; background: none; border: none; color: #ffffff; width: 100%; cursor: pointer; font-weight: 600; font-size: 0.9rem; text-align: left;">
                <i class="bi bi-box-arrow-right" style="font-size: 1.15rem;"></i> Keluar
            </button>
        </form>
    </div>
</div>