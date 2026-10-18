@extends('layouts.admin')

@section('title', 'Kelola Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
  <div>
    <h4 class="fw-bold mb-0" style="color:#1e3a8a;">Kelola Artikel</h4>
    <small class="text-secondary">Tambah, ubah, atau hapus artikel dan informasi terkini.</small>
  </div>
  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
    <i class="bi bi-plus-lg me-1"></i> Tambah Artikel
  </button>
</div>

<div class="card border-0 shadow-sm rounded-4">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr><th>Foto</th><th>Judul</th><th>Tanggal</th><th class="text-end">Aksi</th></tr>
      </thead>
      <tbody>
        @forelse($artikels as $a)
          <tr>
            <td>@include('admin.form.thumb', ['url' => $a->foto_url])</td>
            <td class="fw-semibold">{{ $a->judul }}</td>
            <td class="small text-secondary text-nowrap">{{ $a->created_at->format('d M Y') }}</td>
            <td class="text-end text-nowrap">
              <a href="{{ route('artikel.show', $a->id) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-eye"></i>
              </a>
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $a->id }}">
                <i class="bi bi-pencil"></i>
              </button>
              <form action="{{ route('admin.artikel.destroy', $a->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Hapus artikel ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="4" class="text-center text-secondary py-4">Belum ada artikel.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

{{-- Modal tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data" class="modal-content rounded-4">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Tambah Artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">@include('admin.form.artikel')</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

{{-- Modal ubah (satu per artikel) --}}
@foreach($artikels as $a)
<div class="modal fade" id="edit{{ $a->id }}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <form action="{{ route('admin.artikel.update', $a->id) }}" method="POST" enctype="multipart/form-data" class="modal-content rounded-4">
      @csrf @method('PUT')
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Ubah Artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">@include('admin.form.artikel', ['item' => $a])</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </form>
  </div>
</div>
@endforeach
@endsection