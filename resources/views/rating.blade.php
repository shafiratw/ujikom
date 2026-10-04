@extends('layouts.admin')

@section('title', 'Rating Pengguna - Admin SMKN 4 Bogor')

@section('content')

<div style="display: flex; width: 100vw; height: 100vh; overflow: hidden; background-color: #ffffff; position: absolute; top: 0; left: 0;">

    @include('layouts.sidebar')

    <!-- AREA KANAN -->
    <div style="flex: 1; display: flex; flex-direction: column; height: 100%; overflow: hidden;">

        <!-- NAVBAR -->
        <div style="background-color: #ffffff; padding: 0 2.5rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eaeaea; height: 75px; min-height: 75px; width: 100%;">
            <div style="display: flex; align-items: center; gap: 1rem; font-size: 1.05rem; font-weight: 600; color: #1e3a8a;">
                <i class="bi bi-list" style="font-size: 1.5rem; cursor: pointer; color: #334155;"></i>
                Rating
            </div>

            <div style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem; font-weight: 600; color: #1e293b;">
                <div style="background: #e0f2fe; color: #0284c7; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-person-fill" style="font-size: 1.25rem;"></i>
                </div>
                <span>Admin</span>
            </div>
        </div>

        <!-- KONTEN -->
        <div style="flex: 1; overflow-y: auto; padding: 2.25rem 2.5rem; background-color: #ffffff;">

            @if(session('success'))
                <div id="successAlert" style="background: #d1fae5; color: #047857; border-radius: 12px; padding: 1rem 1.25rem; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem; transition: opacity 0.5s ease;">
                    <i class="bi bi-check-circle-fill" style="font-size: 1.4rem;"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- HEADER -->
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.75rem;">
                <div style="width: 52px; height: 52px; min-width: 52px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-star-fill" style="font-size: 1.35rem;"></i>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: #1e3a8a; margin: 0 0 0.2rem 0;">
                        Rating Pengguna
                    </h2>
                    <p style="font-size: 0.85rem; color: #1e3a8a; margin: 0; font-weight: 500;">
                        Daftar penilaian dan ulasan yang diberikan oleh pengunjung website.
                    </p>
                </div>
            </div>

            <!-- STATISTIK -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 1.5rem;">

                <!-- TOTAL PENILAIAN -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 52px; height: 52px; min-width: 52px; background: #e0f2fe; color: #0284c7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-star-fill" style="font-size: 1.3rem;"></i>
                    </div>

                    <div>
                        <div style="font-size: 0.75rem; color: #94a3b8; font-weight: 500;">Total Penilaian</div>
                        <div style="font-size: 1.5rem; color: #1e293b; font-weight: 700; line-height: 1.2;">
                            {{ $ratings->count() }}
                        </div>
                        <div style="font-size: 0.7rem; color: #1e3a8a; font-weight: 600;">Penilaian</div>
                    </div>
                </div>

                <!-- RATA-RATA RATING -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.25rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05); display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 52px; height: 52px; min-width: 52px; background: #fff4df; color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-bar-chart-fill" style="font-size: 1.3rem;"></i>
                    </div>

                    <div>
                        <div style="font-size: 0.75rem; color: #94a3b8; font-weight: 500;">Rata-rata Rating</div>
                        <div style="font-size: 1.5rem; color: #1e293b; font-weight: 700; line-height: 1.2;">
                            {{ number_format($ratings->avg('bintang') ?? 0, 1) }}
                            <span style="font-size: 1rem; color: #f59e0b;">★</span>
                        </div>
                        <div style="font-size: 0.7rem; color: #1e3a8a; font-weight: 600;">dari 5 bintang</div>
                    </div>
                </div>

            </div>

            <!-- DAFTAR PENILAIAN -->
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">

                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                    <h4 style="font-size: 0.95rem; font-weight: 700; color: #1e3a8a; margin: 0;">
                        <i class="bi bi-star-fill" style="color: #0284c7; margin-right: 0.3rem;"></i>
                        Daftar Penilaian
                    </h4>

                    <span style="background: #e0f2fe; color: #0284c7; padding: 0.35rem 0.7rem; border-radius: 20px; font-size: 0.7rem; font-weight: 600;">
                        {{ $ratings->count() }} Penilaian
                    </span>
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.875rem;">

                        <thead>
                            <tr style="background-color: #f1f5f9; color: #475569; border-bottom: 2px solid #e2e8f0;">
                                <th style="padding: 0.75rem 1rem; width: 60px; font-weight: 600;">No</th>
                                <th style="padding: 0.75rem 1rem; width: 180px; font-weight: 600;">Nama</th>
                                <th style="padding: 0.75rem 1rem; width: 150px; font-weight: 600;">Rating</th>
                                <th style="padding: 0.75rem 1rem; font-weight: 600;">Ulasan</th>
                                <th style="padding: 0.75rem 1rem; width: 160px; font-weight: 600;">Tanggal</th>
                                <th style="padding: 0.75rem 1rem; width: 100px; font-weight: 600;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($ratings as $index => $rating)
                                <tr style="border-bottom: 1px solid #f1f5f9;">

                                    <td style="padding: 1rem; color: #334155;">
                                        {{ $index + 1 }}
                                    </td>

                                    <td style="padding: 1rem; color: #334155; font-weight: 500;">
                                        {{ $rating->nama_pengunjung ?? 'Pengunjung' }}
                                    </td>

                                    <td style="padding: 1rem;">
                                        <div style="display: flex; align-items: center; gap: 2px;">
                                            @for($i = 1; $i <= 5; $i++)
                                                <span style="color: {{ $i <= $rating->bintang ? '#f59e0b' : '#cbd5e1' }}; font-size: 1rem;">★</span>
                                            @endfor
                                        </div>
                                    </td>

                                    <td style="padding: 1rem; color: #334155; line-height: 1.4;">
                                        @if($rating->ulasan)
                                            {{ $rating->ulasan }}
                                        @else
                                            <span style="color: #94a3b8; font-style: italic;">
                                                Tidak ada ulasan
                                            </span>
                                        @endif
                                    </td>

                                    <td style="padding: 1rem; color: #64748b; font-size: 0.75rem; white-space: nowrap;">
                                        {{ $rating->created_at->format('d M Y') }}
                                    </td>

                                    <td style="padding: 1rem;">
                                        <form action="{{ route('rating.destroy', $rating->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus penilaian ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" style="border: none; background: #fee2e2; color: #dc2626; padding: 0.45rem 0.7rem; border-radius: 8px; cursor: pointer; font-size: 0.8rem; font-weight: 600;">
                                                <i class="bi bi-trash-fill"></i>
                                                Hapus
                                            </button>
                                        </form>
                                    </td>

                                </tr>

                            @empty
                                <tr>
                                    <td colspan="6" style="padding: 3rem; text-align: center; color: #94a3b8;">
                                        <i class="bi bi-star" style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;"></i>
                                        <span>Belum ada penilaian dari pengunjung.</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- ALERT OTOMATIS HILANG -->
@if(session('success'))
    <script>
        setTimeout(function () {
            const alertBox = document.getElementById('successAlert');

            if (alertBox) {
                alertBox.style.opacity = '0';

                setTimeout(function () {
                    alertBox.remove();
                }, 500);
            }
        }, 3000);
    </script>
@endif

@endsection