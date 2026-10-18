@extends('layouts.admin')

@section('title', 'Rating')

@section('content')
@php
    $total = $ratings->count();
    $rata  = $total ? round($ratings->avg('bintang'), 1) : 0;
    $bulat = round($rata * 2) / 2;
@endphp

<div class="mb-4">
  <h4 class="fw-bold mb-0" style="color:#1e3a8a;">Rating Pengunjung</h4>
  <small class="text-secondary">Penilaian yang dikirim pengunjung lewat halaman Beranda.</small>
</div>

{{-- Ringkasan --}}
<div class="row g-3 mb-4">
  <div class="col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100 justify-content-center">
      <div class="display-4 fw-bold" style="color:#0085ff;">{{ number_format($rata, 1) }}</div>
      <div class="fs-4" style="color:#fbbf24;">
        @for($i = 1; $i <= 5; $i++)
          @if($bulat >= $i)
            <i class="bi bi-star-fill"></i>
          @elseif($bulat >= $i - 0.5)
            <i class="bi bi-star-half"></i>
          @else
            <i class="bi bi-star"></i>
          @endif
        @endfor
      </div>
      <small class="text-secondary">dari {{ $total }} penilaian</small>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card border-0 shadow-sm rounded-4 p-4 h-100 justify-content-center">
      @for($i = 5; $i >= 1; $i--)
        @php
            $jml    = $ratings->where('bintang', $i)->count();
            $persen = $total ? round($jml / $total * 100) : 0;
        @endphp
        <div class="d-flex align-items-center gap-3 {{ $i > 1 ? 'mb-2' : '' }}">
          <span class="small text-nowrap" style="width:48px;">{{ $i }} <i class="bi bi-star-fill" style="color:#fbbf24;"></i></span>
          <div class="progress flex-grow-1" style="height:10px;">
            <div class="progress-bar" style="width: {{ $persen }}%; background:#0085ff;"></div>
          </div>
          <span class="small text-secondary text-end" style="width:32px;">{{ $jml }}</span>
        </div>
      @endfor
    </div>
  </div>
</div>

{{-- Tabel ulasan --}}
<div class="card border-0 shadow-sm rounded-4">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th style="width:60px;">No</th>
          <th>Nama</th>
          <th class="text-nowrap">Rating</th>
          <th>Ulasan</th>
          <th class="text-nowrap">Tanggal</th>
          <th class="text-end">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($ratings as $r)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="fw-semibold">{{ $r->nama_pengunjung }}</td>
            <td class="text-nowrap" style="color:#fbbf24;">
              @for($i = 1; $i <= 5; $i++)
                <i class="bi {{ $i <= $r->bintang ? 'bi-star-fill' : 'bi-star' }}"></i>
              @endfor
            </td>
            <td style="max-width:360px;">{{ $r->ulasan ?: '-' }}</td>
            <td class="text-secondary text-nowrap">{{ $r->created_at->format('d M Y') }}</td>
            <td class="text-end">
              <form action="{{ route('admin.rating.destroy', $r->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Hapus penilaian ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="6" class="text-center text-secondary py-4">Belum ada penilaian.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection