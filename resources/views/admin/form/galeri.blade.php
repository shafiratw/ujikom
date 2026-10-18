<div class="mb-3">
  <label class="form-label fw-semibold small">Judul Kegiatan</label>
  <input type="text" name="judul" class="form-control" value="{{ $item->judul ?? '' }}" required>
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Deskripsi Singkat</label>
  <input type="text" name="deskripsi" class="form-control" value="{{ $item->deskripsi ?? '' }}" required>
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Foto @isset($item)(kosongkan jika tidak diganti)@endisset</label>
  <input type="file" name="foto" accept="image/*" class="form-control" {{ isset($item) ? '' : 'required' }}>
  <div class="form-text">JPG, PNG, atau WEBP. Maksimal 2 MB.</div>
</div>