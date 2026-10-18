@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
@include('partials.page-header', ['judul' => 'Kontak Kami', 'subjudul' => 'Kami siap membantu kebutuhan konektivitas anda'])

<section class="py-5" style="background: var(--abu-muda);">
  <div class="container">
    <div class="row g-4">

      {{-- Info kontak + peta --}}
      <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
          <h5 class="fw-bold mb-4" style="color: var(--biru-tua);">Informasi Kontak</h5>
          <div class="d-flex gap-3 mb-3">
            <i class="bi bi-geo-alt-fill fs-4" style="color: var(--biru);"></i>
            <div><div class="fw-semibold">Alamat</div><div class="small text-secondary">Jl. Raya Pajajaran No. 88 F Kota Bogor 16153</div></div>
          </div>
          <div class="d-flex gap-3 mb-3">
            <i class="bi bi-telephone-fill fs-4" style="color: var(--biru);"></i>
            <div><div class="fw-semibold">Telepon</div><div class="small text-secondary">+62 812-3456-7890</div></div>
          </div>
          <div class="d-flex gap-3">
            <i class="bi bi-envelope-fill fs-4" style="color: var(--biru);"></i>
            <div><div class="fw-semibold">Email</div><div class="small text-secondary">info@solusikoneksianda.co.id</div></div>
          </div>
        </div>

        <div class="rounded-4 overflow-hidden shadow-sm">
          <iframe src="https://maps.google.com/maps?q=Jl.%20Raya%20Pajajaran%20No.%2088%20F%20Kota%20Bogor%2016153&z=16&output=embed"
                  width="100%" height="260" style="border:0;" loading="lazy"></iframe>
        </div>
      </div>

      {{-- Form pesan --}}
      <div class="col-lg-7">
        <div class="card border-0 shadow-sm rounded-4 p-4">
          <h5 class="fw-bold mb-4" style="color: var(--biru-tua);">Kirim Pesan</h5>

          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

        <form action="{{ route('kontak.store') }}" method="POST">@csrf
          <div class="mb-3">
              <label class="form-label fw-semibold small">Nama</label>
              <input type="text" name="nama" value="{{ old('nama') }}"
                    class="form-control @error('nama') is-invalid @enderror" placeholder="Nama lengkap Anda">
              @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold small">Email</label>
              <input type="email" name="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" placeholder="nama@email.com">
              @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold small">Pesan</label>
              <textarea name="pesan" rows="5"
                        class="form-control @error('pesan') is-invalid @enderror" placeholder="Tulis pesan Anda">{{ old('pesan') }}</textarea>
              @error('pesan')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-biru rounded-3 px-4">
              <i class="bi bi-send me-1"></i> Kirim Pesan
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection