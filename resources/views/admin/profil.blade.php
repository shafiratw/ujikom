@extends('layouts.admin')

@section('title', 'Profil Perusahaan')

@section('content')
<div class="mb-4">
  <h4 class="fw-bold mb-0" style="color:#1e3a8a;">Profil Perusahaan</h4>
  <small class="text-secondary">Ubah informasi perusahaan yang tampil di website. Halaman profil bersifat statis, jadi hanya bisa diperbarui.</small>
</div>

<form action="{{ route('admin.profil.update') }}" method="POST">
  @csrf @method('PUT')

  <div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="row g-3">
      <div class="col-md-8">
        <label class="form-label fw-semibold small">Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" class="form-control" value="{{ old('nama_perusahaan', $profil->nama_perusahaan) }}" required>
      </div>
      <div class="col-md-4">
        <label class="form-label fw-semibold small">Tahun Berdiri</label>
        <input type="text" name="tahun_berdiri" maxlength="4" class="form-control" value="{{ old('tahun_berdiri', $profil->tahun_berdiri) }}">
      </div>
      <div class="col-12">
        <label class="form-label fw-semibold small">Tagline</label>
        <input type="text" name="tagline" class="form-control" value="{{ old('tagline', $profil->tagline) }}">
      </div>
      <div class="col-12">
        <label class="form-label fw-semibold small">Tentang Perusahaan</label>
        <textarea name="tentang" rows="6" class="form-control" required>{{ old('tentang', $profil->tentang) }}</textarea>
      </div>
      <div class="col-12">
        <label class="form-label fw-semibold small">Visi</label>
        <textarea name="visi" rows="3" class="form-control" required>{{ old('visi', $profil->visi) }}</textarea>
      </div>
      <div class="col-12">
        <label class="form-label fw-semibold small">Misi <span class="text-secondary fw-normal">(satu misi per baris)</span></label>
        <textarea name="misi" rows="6" class="form-control" required>{{ old('misi', $profil->misi) }}</textarea>
      </div>
    </div>
  </div>

  <div class="mt-4">
    <button type="submit" class="btn btn-primary px-4">
      <i class="bi bi-save me-1"></i> Simpan Perubahan
    </button>
  </div>
</form>
@endsection