@extends('layouts.admin')

@section('title', 'Dashboard Admin - SMKN 4 Bogor')

@section('content')
<!-- Container Utama Full Layar -->
<div style="display: flex; width: 100vw; height: 100vh; overflow: hidden; background-color: #ffffff; position: absolute; top: 0; left: 0;">
    
    <!-- Panggil Sidebar yang Disatukan -->
    @include('layouts.sidebar')

    <!-- Area Kanan (Pembungkus Utama Navbar & Konten) -->
    <div style="flex: 1; display: flex; flex-direction: column; height: 100%; overflow: hidden; background-color: #ffffff;">

        <!-- Navbar Atas (Sekarang posisinya aman di atas dan tidak ikut scroll ke bawah) -->
        <div style="background-color: #ffffff; padding: 0 2.5rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eaeaea; height: 75px; min-height: 75px; width: 100%;">
            <div style="display: flex; align-items: center; gap: 1rem; font-size: 1.05rem; font-weight: 600; color: #1e3a8a;">
                <i class="bi bi-list" style="font-size: 1.5rem; cursor: pointer; color: #334155;"></i>
            </div>
            <div style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem; font-weight: 600; color: #1e293b;">
                <div style="background: #e0f2fe; color: #0284c7; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-person-fill" style="font-size: 1.25rem;"></i>
                </div>
                <span>Admin</span>
            </div>
        </div>

        <!-- Area Konten Utama (Bagian inilah yang bisa di-scroll ke bawah) -->
        <div style="flex: 1; overflow-y: auto; padding: 2.25rem 2.5rem; background-color: #f8fafc;">
            
            <!-- Banner Selamat Datang -->
            <div style="background: #f0f7ff; border: 1px solid #d1e5ff; padding: 1.75rem 2rem; border-radius: 16px; margin-bottom: 2rem;">
                <h2 style="font-size: 1.4rem; font-weight: 700; color: #0f172a; margin: 0 0 0.4rem 0;">Selamat Datang, Admin!</h2>
                <p style="font-size: 0.9rem; color: #475569; margin: 0;">Kelola informasi website SMKN 4 BOGOR dengan mudah melalui menu yang tersedia.</p>
            </div>

            <!-- Kartu Statistik Sesuai Desain Persis -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 2rem;">
                
                <!-- Card 1: Total Pengumuman -->
                <div style="background: #ffffff; padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.02); display: flex; align-items: center; gap: 1.5rem;">
                    <div style="width: 64px; height: 64px; min-width: 64px; background: #eff6ff; color: #0085ff; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-megaphone-fill" style="font-size: 1.6rem;"></i>
                    </div>
                    <div>
                        <span style="font-size: 0.75rem; color: #cbd5e1; font-weight: 500; display: block; margin-bottom: 0.15rem;">Total Pengumuman</span>
                        <div style="font-size: 1.85rem; font-weight: 700; color: #0f172a; line-height: 1.1; margin-bottom: 0.15rem;">
                            {{ $totalPengumuman ?? 0 }}
                        </div>
                        <span style="font-size: 0.8rem; color: #1e3a8a; font-weight: 600;">Pengumuman</span>
                    </div>
                </div>

                <!-- Card 2: Total Galeri -->
                <div style="background: #ffffff; padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.02); display: flex; align-items: center; gap: 1.5rem;">
                    <div style="width: 64px; height: 64px; min-width: 64px; background: #eff6ff; color: #0085ff; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-image-fill" style="font-size: 1.6rem;"></i>
                    </div>
                    <div>
                        <span style="font-size: 0.75rem; color: #cbd5e1; font-weight: 500; display: block; margin-bottom: 0.15rem;">Total Galeri</span>
                        <div style="font-size: 1.85rem; font-weight: 700; color: #0f172a; line-height: 1.1; margin-bottom: 0.15rem;">
                            {{ $totalGaleri ?? 0 }}
                        </div>
                        <span style="font-size: 0.8rem; color: #1e3a8a; font-weight: 600;">Galeri</span>
                    </div>
                </div>

                <!-- Card 3: Total Admin -->
                <div style="background: #ffffff; padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.02); display: flex; align-items: center; gap: 1.5rem;">
                    <div style="width: 64px; height: 64px; min-width: 64px; background: #eff6ff; color: #0085ff; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-person-fill" style="font-size: 1.75rem;"></i>
                    </div>
                    <div>
                        <span style="font-size: 0.75rem; color: #cbd5e1; font-weight: 500; display: block; margin-bottom: 0.15rem;">Total Admin</span>
                        <div style="font-size: 1.85rem; font-weight: 700; color: #0f172a; line-height: 1.1; margin-bottom: 0.15rem;">
                            {{ $totalAdmin ?? 1 }}
                        </div>
                        <span style="font-size: 0.8rem; color: #1e3a8a; font-weight: 600;">Admin</span>
                    </div>
                </div>

            </div>

            <!-- Grid Bawah: Galeri & Pengumuman Terbaru -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                
                <!-- Galeri Terbaru -->
                <div style="background: #ffffff; padding: 1.75rem; border-radius: 16px; border: 1px solid #e2e8f0; min-height: 280px;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; color: #1e3a8a; margin: 0 0 1.25rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="bi bi-image" style="color: #0085ff;"></i> Galeri Terbaru
                    </h4>
                    
                    @if(isset($galeriTerbaru) && count($galeriTerbaru) > 0)
                        @foreach($galeriTerbaru as $item)
                            <div style="display: flex; align-items: flex-start; gap: 1rem; padding-bottom: 0.85rem; margin-bottom: 0.85rem; border-bottom: 1px solid #f1f5f9;">
                                <div style="width: 55px; height: 55px; min-width: 55px; border-radius: 10px; background-image: url('{{ asset('storage/' . $item->foto) }}'); background-size: cover; background-position: center; background-color: #f1f5f9;"></div>
                                <div>
                                    <div style="font-size: 0.8rem; font-weight: 600; color: #1e3a8a; line-height: 1.3; margin-bottom: 0.2rem;">
                                        {{ $item->deskripsi }}
                                    </div>
                                    <div style="color: #94a3b8; font-size: 0.725rem;">
                                        {{ $item->created_at->format('d F Y') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div style="display: flex; align-items: center; justify-content: center; height: 180px; color: #94a3b8; font-size: 0.85rem; font-style: italic;">
                            Belum ada galeri tersedia.
                        </div>
                    @endif
                </div>

                <!-- Pengumuman Terbaru -->
                <div style="background: #ffffff; padding: 1.75rem; border-radius: 16px; border: 1px solid #e2e8f0; min-height: 280px;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; color: #1e3a8a; margin: 0 0 1.25rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="bi bi-megaphone" style="color: #0085ff;"></i> Pengumuman Terbaru
                    </h4>
                    
                    @if(isset($pengumumanTerbaru) && count($pengumumanTerbaru) > 0)
                        @foreach($pengumumanTerbaru as $item)
                            <div style="display: flex; align-items: flex-start; gap: 1rem; padding-bottom: 0.85rem; margin-bottom: 0.85rem; border-bottom: 1px solid #f1f5f9;">
                                <div style="width: 55px; height: 55px; min-width: 55px; border-radius: 10px; background-image: url('{{ asset('storage/' . $item->foto) }}'); background-size: cover; background-position: center; background-color: #f1f5f9;"></div>
                                <div>
                                    <div style="font-size: 0.8rem; font-weight: 600; color: #1e3a8a; line-height: 1.3; margin-bottom: 0.2rem;">
                                        {{ $item->judul }}
                                    </div>
                                    <div style="color: #94a3b8; font-size: 0.725rem;">
                                        {{ $item->created_at->format('d F Y') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div style="display: flex; align-items: center; justify-content: center; height: 180px; color: #94a3b8; font-size: 0.85rem; font-style: italic;">
                            Belum ada pengumuman tersedia.
                        </div>
                    @endif
                </div>

            </div>

        </div>

    </div>

</div>
@endsection