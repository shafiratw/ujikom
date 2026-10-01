@extends('layouts.admin')

@section('title', 'Pengumuman - SMKN 4 Bogor')

@section('content')
<!-- Container Utama Full Layar -->
<div style="display: flex; width: 100vw; height: 100vh; overflow: hidden; background-color: #ffffff; position: absolute; top: 0; left: 0;">
    
    <!-- Panggil Sidebar yang Disatukan -->
    @include('layouts.sidebar')

    <!-- AREA KANAN (Navbar Atas + Konten) -->
    <div style="flex: 1; display: flex; flex-direction: column; height: 100%; overflow: hidden;">
        
        <!-- Navbar Atas -->
        <div style="background-color: #ffffff; padding: 0 2.5rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eaeaea; height: 75px; min-height: 75px; width: 100%;">
            <div style="display: flex; align-items: center; gap: 1rem; font-size: 1.05rem; font-weight: 600; color: #1e3a8a;">
                <i class="bi bi-list" style="font-size: 1.5rem; cursor: pointer; color: #334155;"></i> Pengumuman
            </div>
            <div style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem; font-weight: 600; color: #1e293b;">
                <div style="background: #e0f2fe; color: #0284c7; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-person-fill" style="font-size: 1.25rem;"></i>
                </div>
                <span>Admin</span>
            </div>
        </div>

        <!-- Konten Utama (Bisa Di-scroll) -->
        <div style="flex: 1; overflow-y: auto; padding: 2.25rem 2.5rem; background-color: #ffffff;">
            
            <!-- Alert Notifikasi Sukses -->
            @if(session('success'))
                <div style="background: #dcfce7; color: #166534; padding: 0.85rem 1.25rem; border-radius: 10px; margin-bottom: 1.5rem; font-size: 0.85rem; display: flex; justify-content: space-between; align-items: center;">
                    <span>{{ session('success') }}</span>
                    <button onclick="this.parentElement.remove()" style="background: none; border: none; font-size: 1rem; cursor: pointer; color: #166534;">&times;</button>
                </div>
            @endif

            <!-- Header Judul, Ikon Megaphone Navy, & Deskripsi -->
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.75rem;">
                <div style="width: 52px; height: 52px; min-width: 52px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(30,58,138,0.25);">
                    <i class="bi bi-megaphone-fill" style="font-size: 1.35rem;"></i>
                </div>
                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: #1e3a8a; margin: 0 0 0.2rem 0;">Daftar Pengumuman</h2>
                    <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Kelola informasi resmi dan pengumuman SMKN 4 Bogor.</p>
                </div>
            </div>

            <!-- Box Putih Utama -->
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2rem; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                
                <!-- Baris Tombol Tambah (Memicu Modal) -->
                <div style="display: flex; justify-content: flex-end; align-items: center; margin-bottom: 2rem;">
                    <button type="button" onclick="openModalTambah()" style="background: #0085ff; color: #ffffff; padding: 0.7rem 1.35rem; border: none; border-radius: 10px; font-size: 0.85rem; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 0.5rem; box-shadow: 0 2px 5px rgba(0,133,255,0.2);">
                        Tambah <i class="bi bi-plus-circle-fill" style="font-size: 0.95rem;"></i>
                    </button>
                </div>

                <!-- Grid Kartu Pengumuman -->
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
                    
                    @forelse($daftarPengumuman ?? $pengumuman ?? [] as $item)
                        <!-- Card Item Pengumuman -->
                        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                            
                            <!-- Kotak Gambar -->
                            @if(!empty($item->foto))
                                <div style="height: 180px; width: 100%; overflow: hidden; background-color: #f8fafc;">
                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Pengumuman" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @endif
                            
                            <!-- Bagian Keterangan & Tombol Aksi -->
                            <div style="padding: 1.25rem; display: flex; flex-direction: column; flex: 1; justify-content: space-between;">
                                <div>
                                    <h6 style="font-size: 0.95rem; font-weight: 700; color: #1e293b; margin: 0 0 0.35rem 0;">
                                        {{ $item->judul }}
                                    </h6>
                                    <p style="font-size: 0.8rem; color: #64748b; line-height: 1.4; margin: 0 0 0.5rem 0; font-weight: 400;">
                                        {{ $item->deskripsi ?? $item->isi }}
                                    </p>
                                    <span style="font-size: 0.725rem; color: #94a3b8; display: block; margin-bottom: 1.25rem;">
                                        <i class="bi bi-calendar3"></i> {{ $item->tanggal ?? ($item->created_at ? $item->created_at->format('d F Y') : '') }}
                                    </span>
                                </div>
                                
                                <!-- Tombol Edit & Hapus -->
                                <div style="display: flex; gap: 0.5rem;">
                                    <button type="button" onclick="openModalEdit('{{ $item->id }}', '{{ addslashes($item->judul) }}', '{{ addslashes($item->deskripsi ?? $item->isi) }}')" style="flex: 1; background: #0085ff; color: #ffffff; padding: 0.5rem; border: none; border-radius: 8px; text-align: center; cursor: pointer; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <form action="{{ url('/pengumuman/' . $item->id) }}" method="POST" style="flex: 1;" onsubmit="return confirm('Yakin ingin menghapus pengumuman ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="width: 100%; background: #ef4444; color: #ffffff; padding: 0.5rem; border: none; border-radius: 8px; text-align: center; cursor: pointer; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Placeholder Kosong Bersih -->
                        <div style="grid-column: span 3; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 4rem 0; color: #94a3b8; font-style: italic; font-size: 0.9rem;">
                            <i class="bi bi-megaphone" style="font-size: 2.5rem; margin-bottom: 0.5rem; color: #cbd5e1;"></i>
                            Belum ada pengumuman.
                        </div>
                    @endforelse

                </div>

            </div>

        </div>
    </div>

</div>

<!-- MODAL POP-UP FORM TAMBAH PENGUMUMAN -->
<div id="modalTambah" style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0, 0, 0, 0.4); z-index: 9999; align-items: center; justify-content: center;">
    <div style="background: #ffffff; width: 100%; max-width: 520px; border-radius: 16px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.15); position: relative;">
        
        <!-- Header Modal -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; border-bottom: 1px solid #f1f5f9; padding-bottom: 1rem;">
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1e3a8a; margin: 0;">Tambah Pengumuman Baru</h3>
            <button type="button" onclick="closeModalTambah()" style="background: none; border: none; font-size: 1.25rem; color: #94a3b8; cursor: pointer;">&times;</button>
        </div>

        <!-- Form Input Data -->
        <form action="{{ url('/pengumuman') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Input Judul -->
            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: #1e293b; margin-bottom: 0.4rem;">Judul Pengumuman</label>
                <input type="text" name="judul" placeholder="Masukkan judul pengumuman..." required style="width: 100%; padding: 0.7rem 0.9rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.85rem; outline: none; background: #f8fafc; color: #1e293b;">
            </div>

            <!-- Input Deskripsi -->
            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: #1e293b; margin-bottom: 0.4rem;">Deskripsi Pengumuman</label>
                <textarea name="deskripsi" rows="3" placeholder="Tuliskan isi informasi pengumuman..." required style="width: 100%; padding: 0.7rem 0.9rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.85rem; outline: none; background: #f8fafc; color: #1e293b; resize: vertical;"></textarea>
            </div>

            <!-- Input Upload Foto -->
            <div style="margin-bottom: 1.75rem;">
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: #1e293b; margin-bottom: 0.4rem;">Upload Foto (Opsional)</label>
                <input type="file" name="foto" accept="image/*" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.8rem; background: #f8fafc; color: #1e293b;">
            </div>

            <!-- Tombol Simpan & Batal -->
            <div style="display: flex; justify-content: flex-end; gap: 0.75rem;">
                <button type="button" onclick="closeModalTambah()" style="background: #f1f5f9; color: #475569; padding: 0.65rem 1.25rem; border: none; border-radius: 8px; font-size: 0.85rem; font-weight: 600; cursor: pointer;">
                    Batal
                </button>
                <button type="submit" style="background: #0085ff; color: #ffffff; padding: 0.65rem 1.25rem; border: none; border-radius: 8px; font-size: 0.85rem; font-weight: 600; cursor: pointer; box-shadow: 0 2px 5px rgba(0,133,255,0.2);">
                    Simpan Pengumuman
                </button>
            </div>
        </form>

    </div>
</div>

<!-- MODAL POP-UP FORM EDIT PENGUMUMAN -->
<div id="modalEdit" style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0, 0, 0, 0.4); z-index: 9999; align-items: center; justify-content: center;">
    <div style="background: #ffffff; width: 100%; max-width: 520px; border-radius: 16px; padding: 2rem; box-shadow: 0 10px 25px rgba(0,0,0,0.15); position: relative;">
        
        <!-- Header Modal -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; border-bottom: 1px solid #f1f5f9; padding-bottom: 1rem;">
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #1e3a8a; margin: 0;">Edit Pengumuman</h3>
            <button type="button" onclick="closeModalEdit()" style="background: none; border: none; font-size: 1.25rem; color: #94a3b8; cursor: pointer;">&times;</button>
        </div>

        <!-- Form Edit Data -->
        <form id="formEdit" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Input Judul -->
            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: #1e293b; margin-bottom: 0.4rem;">Judul Pengumuman</label>
                <input type="text" id="editJudul" name="judul" required style="width: 100%; padding: 0.7rem 0.9rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.85rem; outline: none; background: #f8fafc; color: #1e293b;">
            </div>

            <!-- Input Deskripsi -->
            <div style="margin-bottom: 1.25rem;">
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: #1e293b; margin-bottom: 0.4rem;">Isi / Deskripsi Pengumuman</label>
                <textarea id="editDeskripsi" name="deskripsi" rows="3" required style="width: 100%; padding: 0.7rem 0.9rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.85rem; outline: none; background: #f8fafc; color: #1e293b; resize: vertical;"></textarea>
            </div>

            <!-- Input Upload Foto -->
            <div style="margin-bottom: 1.75rem;">
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: #1e293b; margin-bottom: 0.4rem;">Ganti Foto (Opsional)</label>
                <input type="file" name="foto" accept="image/*" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.8rem; background: #f8fafc; color: #1e293b;">
            </div>

            <!-- Tombol Simpan & Batal -->
            <div style="display: flex; justify-content: flex-end; gap: 0.75rem;">
                <button type="button" onclick="closeModalEdit()" style="background: #f1f5f9; color: #475569; padding: 0.65rem 1.25rem; border: none; border-radius: 8px; font-size: 0.85rem; font-weight: 600; cursor: pointer;">
                    Batal
                </button>
                <button type="submit" style="background: #0085ff; color: #ffffff; padding: 0.65rem 1.25rem; border: none; border-radius: 8px; font-size: 0.85rem; font-weight: 600; cursor: pointer; box-shadow: 0 2px 5px rgba(0,133,255,0.2);">
                    Simpan Perubahan
                </button>
            </div>
        </form>

    </div>
</div>

<!-- Script Modal Tambah & Edit Pengumuman -->
<script>
    function openModalTambah() {
        document.getElementById('modalTambah').style.display = 'flex';
    }

    function closeModalTambah() {
        document.getElementById('modalTambah').style.display = 'none';
    }

    function openModalEdit(id, judul, deskripsi) {
        document.getElementById('editJudul').value = judul;
        document.getElementById('editDeskripsi').value = deskripsi;
        document.getElementById('formEdit').action = '/pengumuman/' + id;
        document.getElementById('modalEdit').style.display = 'flex';
    }

    function closeModalEdit() {
        document.getElementById('modalEdit').style.display = 'none';
    }

    window.onclick = function(event) {
        var modalTambah = document.getElementById('modalTambah');
        var modalEdit = document.getElementById('modalEdit');
        if (event.target == modalTambah) {
            closeModalTambah();
        }
        if (event.target == modalEdit) {
            closeModalEdit();
        }
    }
</script>
@endsection