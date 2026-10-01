@extends('layouts.admin')

@section('title', 'Kontak Masuk - Admin SMKN 4 Bogor')

@section('content')
<div style="display: flex; width: 100vw; height: 100vh; overflow: hidden; background-color: #ffffff; position: absolute; top: 0; left: 0;">
    
    <!-- Panggil Sidebar -->
    @include('layouts.sidebar')

    <!-- AREA KANAN -->
    <div style="flex: 1; display: flex; flex-direction: column; height: 100%; overflow: hidden;">
        
        <!-- Navbar Atas -->
        <div style="background-color: #ffffff; padding: 0 2.5rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eaeaea; height: 75px; min-height: 75px; width: 100%;">
            
            <div style="display: flex; align-items: center; gap: 1rem; font-size: 1.05rem; font-weight: 600; color: #1e3a8a;">
                <i class="bi bi-list" style="font-size: 1.5rem; cursor: pointer; color: #334155;"></i>
                Galeri
            </div>

            <div style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem; font-weight: 600; color: #1e293b;">
                <div style="background: #e0f2fe; color: #0284c7; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-person-fill" style="font-size: 1.25rem;"></i>
                </div>
                <span>Admin</span>
            </div>

        </div>


        <!-- Konten Utama -->
        <div style="flex: 1; overflow-y: auto; padding: 2.25rem 2.5rem; background-color: #ffffff;">
            
            <!-- Notifikasi Berhasil -->
            @if(session('success'))
                <div style="background-color: #d1fae5; color: #065f46; padding: 0.85rem 1.25rem; border-radius: 8px; margin-bottom: 1.25rem; font-size: 0.875rem; border: 1px solid #a7f3d0; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('success') }}
                </div>
            @endif


            <!-- Header -->
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.75rem;">
                
                <div style="width: 52px; height: 52px; min-width: 52px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(30,58,138,0.25);">
                    <i class="bi bi-envelope-fill" style="font-size: 1.35rem;"></i>
                </div>

                <div>
                    <h2 style="font-size: 1.35rem; font-weight: 700; color: #1e3a8a; margin: 0 0 0.2rem 0;">
                        Pesan Masuk
                    </h2>

                    <p style="font-size: 0.85rem; color: #1e3a8a; margin: 0; font-weight: 500;">
                        Daftar pesan yang dikirim melalui form kontak.
                    </p>
                </div>

            </div>
            

            <!-- Box Tabel -->
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">

                <!-- Tabel Data -->
                <div style="overflow-x: auto;">
                    
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.875rem;">
                        
                        <!-- HEADER TABEL -->
                        <thead>
                            <tr style="background-color: #f1f5f9; color: #475569; border-bottom: 2px solid #e2e8f0;">
                                
                                <th style="padding: 0.75rem 1rem; width: 60px; font-weight: 600;">
                                    No
                                </th>

                                <th style="padding: 0.75rem 1rem; width: 180px; font-weight: 600;">
                                    Nama
                                </th>

                                <th style="padding: 0.75rem 1rem; width: 220px; font-weight: 600;">
                                    Email
                                </th>

                                <th style="padding: 0.75rem 1rem; font-weight: 600;">
                                    Pesan
                                </th>

                                <!-- KOLOM AKSI -->
                                <th style="padding: 0.75rem 1rem; width: 100px; font-weight: 600; text-align: center;">
                                    Aksi
                                </th>

                            </tr>
                        </thead>


                        <!-- ISI TABEL -->
                        <tbody>

                            @forelse($contacts as $index => $contact)

                            <tr style="border-bottom: 1px solid #f1f5f9;">

                                <!-- NO -->
                                <td style="padding: 1rem; color: #334155;">
                                    {{ $index + 1 }}
                                </td>


                                <!-- NAMA -->
                                <td style="padding: 1rem; color: #334155; font-weight: 500;">
                                    {{ $contact->name }}
                                </td>


                                <!-- EMAIL -->
                                <td style="padding: 1rem; color: #0284c7;">
                                    {{ $contact->email }}
                                </td>


                                <!-- PESAN -->
                                <td style="padding: 1rem; color: #334155; line-height: 1.4;">
                                    {{ $contact->message }}
                                </td>


                                <!-- TOMBOL HAPUS -->
                                <td style="padding: 1rem; text-align: center;">

                                    <form action="{{ route('kontak.destroy', $contact->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            style="
                                                background-color: #ef4444;
                                                color: white;
                                                border: none;
                                                padding: 7px 12px;
                                                border-radius: 7px;
                                                font-size: 12px;
                                                font-weight: 600;
                                                cursor: pointer;
                                                display: inline-flex;
                                                align-items: center;
                                                gap: 5px;
                                            ">

                                            <i class="bi bi-trash-fill"></i>
                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                            @empty

                            <!-- JIKA BELUM ADA PESAN -->
                            <tr>

                                <td colspan="5"
                                    style="padding: 3rem; text-align: center; color: #94a3b8;">

                                    <i class="bi bi-inbox"
                                       style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">
                                    </i>

                                    <span>
                                        Belum ada pesan masuk.
                                    </span>

                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection