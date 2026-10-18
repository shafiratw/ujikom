@extends('layouts.admin')

@section('title', 'Pesan Masuk')

@section('content')
<div class="mb-4">
  <h4 class="fw-bold mb-0" style="color:#1e3a8a;">Pesan Masuk</h4>
  <small class="text-secondary">Pesan yang dikirim pengunjung lewat halaman Kontak Kami.</small>
</div>

<div class="card border-0 shadow-sm rounded-4">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th style="width:60px;">No</th>
          <th>Pengirim</th>
          <th>Email</th>
          <th>Pesan</th>
          <th class="text-nowrap">Tanggal</th>
          <th class="text-end">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($pesans as $p)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="fw-semibold">{{ $p->name }}</td>
            <td class="text-secondary">{{ $p->email }}</td>
            <td style="max-width:360px;">{!! nl2br(e($p->message)) !!}</td>
            <td class="text-secondary text-nowrap">{{ $p->created_at->format('d M Y') }}</td>
            <td class="text-end">
              <form action="{{ route('admin.pesan.destroy', $p->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Hapus pesan ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="6" class="text-center text-secondary py-4">Belum ada pesan masuk.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection