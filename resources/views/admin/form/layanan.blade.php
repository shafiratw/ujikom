<div class="mb-3">
  <label class="form-label fw-semibold small">Nama Layanan</label>
  <input type="text" name="nama" class="form-control" value="{{ $item->nama ?? '' }}" required>
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Deskripsi</label>
  <textarea name="deskripsi" rows="4" class="form-control" required>{{ $item->deskripsi ?? '' }}</textarea>
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Harga mulai dari (Rp, boleh dikosongkan)</label>
  <input type="number" name="harga" min="0" class="form-control" value="{{ $item->harga ?? '' }}">
</div>
<div class="mb-3">
  <label class="form-label fw-semibold small">Foto @isset($item)(kosongkan jika tidak diganti)@endisset</label>
  <input type="file" name="foto" accept="image/*" class="form-control">
  <div class="form-text">JPG, PNG, atau WEBP. Maksimal 2 MB.</div>
</div>