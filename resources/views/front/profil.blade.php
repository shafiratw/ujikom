@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')
@include('partials.page-header', ['judul' => 'Profil Perusahaan', 'subjudul' => 'Mengenal lebih dekat ' . $profil->nama_perusahaan])

<section class="py-5" style="background: var(--abu-muda);">
  <div class="container">

    {{-- Tentang --}}
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <h3 class="section-title mb-3">Tentang Perusahaan</h3>
          <p class="text-secondary lh-lg">{{ $profil->tentang }}</p>

          <div class="row g-3 text-center mt-2">
            <div class="col-6">
              <div class="p-3 border rounded-4">
                <i class="bi bi-calendar-check fs-3" style="color: var(--biru);"></i>
                <div class="small text-secondary mt-1">Tahun Berdiri</div>
                <div class="fw-bold fs-4" style="color: var(--biru-tua);">{{ $profil->tahun_berdiri ?? '-' }}</div>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border rounded-4">
                <i class="bi bi-award fs-3" style="color: var(--biru);"></i>
                <div class="small text-secondary mt-1">Pengalaman</div>
                <div class="fw-bold fs-4" style="color: var(--biru-tua);">
                  {{ $profil->tahun_berdiri ? (date('Y') - $profil->tahun_berdiri) . ' Tahun' : '-' }}
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- FOTO di samping Tentang Perusahaan --}}
        <div class="col-lg-6">
          <div class="rounded-4 overflow-hidden bg-primary-subtle">
            <img src="{{ asset('images/tentang.jpg') }}" alt="Tentang {{ $profil->nama_perusahaan }}"
                class="w-100 d-block" style="height:340px; object-fit:cover;">
          </div>
        </div>
      </div>
    </div>

    {{-- Visi & Misi --}}
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
          <h4 class="fw-bold mb-3" style="color: var(--biru-tua);"><i class="bi bi-eye-fill me-2"></i>Visi</h4>
          <div class="p-3 rounded-3 bg-primary-subtle" style="color: var(--biru-tua);">{{ $profil->visi }}</div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
          <h4 class="fw-bold mb-3" style="color: var(--biru-tua);"><i class="bi bi-bullseye me-2"></i>Misi</h4>
          <ol class="ps-3 mb-0 lh-lg">
            @foreach($profil->daftar_misi as $misi)
              <li>{{ $misi }}</li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection