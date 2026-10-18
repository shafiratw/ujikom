<div class="mb-3">
  <label class="form-label fw-semibold small">Judul</label>
  <input type="text" name="judul" class="form-control" value="{{ $item->judul ?? '' }}" required>
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Isi Artikel</label>
  <textarea name="isi" rows="7" class="form-control" required>{{ $item->isi ?? '' }}</textarea>
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Foto @isset($item)(kosongkan jika tidak diganti)@endisset</label>
  <input type="file" name="foto" accept="image/*" class="form-control">
  <div class="form-text">JPG, PNG, atau WEBP. Maksimal 2 MB.</div>
</div>