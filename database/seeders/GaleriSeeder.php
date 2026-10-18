<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['judul' => 'Instalasi Fiber di Perumahan',  'deskripsi' => 'Tim teknisi memasang jaringan fiber optik di kawasan perumahan.'],
            ['judul' => 'Pemasangan Jaringan Kantor',    'deskripsi' => 'Penataan kabel dan perangkat jaringan untuk kantor klien.'],
            ['judul' => 'Pelatihan Teknisi',             'deskripsi' => 'Pelatihan internal untuk meningkatkan kompetensi tim teknisi.'],
            ['judul' => 'Kunjungan Pelanggan',           'deskripsi' => 'Survei lokasi dan konsultasi langsung dengan pelanggan.'],
            ['judul' => 'Maintenance Server Room',       'deskripsi' => 'Pemeriksaan rutin perangkat di ruang server.'],
            ['judul' => 'Gathering Karyawan',            'deskripsi' => 'Kegiatan kebersamaan seluruh tim PT Solusi Koneksi Anda.'],
        ];

        foreach ($data as $i => $item) {
            Galeri::create($item + ['foto' => 'images/galeri' . ($i + 1) . '.jpg']);
        }
    }
}