<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama'      => 'Internet Fiber Optik',
                'deskripsi' => 'Layanan internet berbasis fiber optik dengan kecepatan tinggi dan koneksi stabil untuk rumah maupun kantor. Tersedia paket 20 Mbps hingga 100 Mbps.',
                'harga'     => 250000,
                'foto'      => 'images/layanan1.jpg',
            ],
            [
                'nama'      => 'Instalasi Jaringan LAN & Wi-Fi',
                'deskripsi' => 'Perancangan dan pemasangan jaringan kabel maupun nirkabel untuk gedung perkantoran, sekolah, dan tempat usaha, lengkap dengan konfigurasi perangkat.',
                'harga'     => 1500000,
                'foto'      => 'images/layanan2.jpg',
            ],
            [
                'nama'      => 'Maintenance & Monitoring Jaringan',
                'deskripsi' => 'Pemeliharaan berkala dan pemantauan jaringan untuk memastikan koneksi selalu optimal, termasuk penanganan gangguan dengan respons cepat.',
                'harga'     => 750000,
                'foto'      => 'images/layanan3.jpg',
            ],
            [
                'nama'      => 'Pemasangan CCTV',
                'deskripsi' => 'Pemasangan kamera pengawas dengan akses pantau jarak jauh lewat smartphone untuk menjaga keamanan rumah dan tempat usaha Anda.',
                'harga'     => 2000000,
                'foto'      => 'images/layanan4.jpg',
            ],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}