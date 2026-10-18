@extends('layouts.admin')

@section('title', 'Kelola Layanan')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
  <div>
    <h4 class="fw-bold mb-0" style="color:#1e3a8a;">Kelola Layanan</h4>
    <small class="text-secondary">Tambah, ubah, atau hapus produk/layanan yang tampil di website.</small>
  </div>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
    <i class="bi bi-plus-lg me-1"></i> Tambah Layanan
  </button>
</div>

<div class="card border-0 shadow-sm rounded-4">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr><th>Foto</th><th>Nama</th><th>Deskripsi</th><th>Harga</th><th class="text-end">Aksi</th></tr>
      </thead>
      <tbody>
        @forelse($produks as $p)
          <tr>
            <td>@include('admin.form.thumb', ['url' => $p->foto_url])</td>
            <td class="fw-semibold">{{ $p->nama }}</td>
            <td class="small text-secondary">{{ \Illuminate\Support\Str::limit($p->deskripsi, 70) }}</td>
            <td class="text-nowrap">{{ $p->harga ? 'Rp ' . number_format($p->harga, 0, ',', '.') : '-' }}</td>
            <td class="text-end text-nowrap">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $p->id }}">
                <i class="bi bi-pencil"></i>
              </button>
              <form action="{{ route('admin.layanan.destroy', $p->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Hapus layanan ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="5" class="text-center text-secondary py-4">Belum ada layanan.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

{{-- Modal tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form action="{{ route('admin.layanan.store') }}" method="POST" enctype="multipart/form-data" class="modal-content rounded-4">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Tambah Layanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">@include('admin.form.layanan')</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

{{-- Modal ubah (satu per layanan) --}}
@foreach($produks as $p)
<div class="modal fade" id="edit{{ $p->id }}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <form action="{{ route('admin.layanan.update', $p->id) }}" method="POST" enctype="multipart/form-data" class="modal-content rounded-4">
      @csrf @method('PUT')
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Ubah Layanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">@include('admin.form.layanan', ['item' => $p])</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </form>
  </div>
</div>
@endforeach
@endsection