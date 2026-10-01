@php
    // Fetch data langsung jika dipanggil sebagai partial tanpa controller
    $daftarPengumuman = $daftarPengumuman ?? \App\Models\Pengumuman::latest()->get();
@endphp

<section id="pengumuman" class="py-5 bg-light">
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Pengumuman Terbaru</h2>
            <p class="text-muted">
                Informasi resmi seputar pengumuman SMKN 4 Bogor
            </p>
        </div>

        <div class="row">

            {{-- Hanya mengacu pada $daftarPengumuman yang dipastikan berbentuk Collection --}}
            @forelse($daftarPengumuman as $item)

                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">

                        {{-- FOTO --}}
                        @if($item->foto)

                            <img 
                                src="{{ asset('storage/' . $item->foto) }}"
                                class="card-img-top"
                                alt="Foto Pengumuman"
                                style="height: 200px; object-fit: cover;"
                            >

                        @else

                            <div 
                                class="bg-secondary text-white d-flex align-items-center justify-content-center"
                                style="height: 200px;"
                            >
                                <span>Tidak ada foto</span>
                            </div>

                        @endif

                        <div class="card-body d-flex flex-column justify-content-between">

                            <div>

                                {{-- TANGGAL --}}
                                <span class="text-muted small mb-2 d-block">
                                    <i class="bi bi-calendar"></i>
                                    {{ $item->created_at->format('d F Y') }}
                                </span>

                                {{-- JUDUL --}}
                                <h5 class="card-title fw-bold text-dark">
                                    {{ $item->judul }}
                                </h5>

                                {{-- DESKRIPSI --}}
                                <p class="card-text text-secondary small">
                                    {{ Str::limit($item->deskripsi, 100) }}
                                </p>

                            </div>

                            {{-- DETAIL --}}
                            <a 
                                href="{{ route('pengumuman.show', $item->id) }}"
                                class="text-primary text-decoration-none fw-semibold"
                            >
                                Baca Selengkapnya →
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center py-5">
                    <p class="text-muted fst-italic">
                        Belum ada pengumuman yang dipublikasikan saat ini.
                    </p>
                </div>

            @endforelse

        </div>

    </div>
</section>