<?php

namespace Database\Seeders;

use App\Models\ProfilPerusahaan;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    public function run(): void
    {
        ProfilPerusahaan::create([
            'nama_perusahaan' => 'PT Solusi Koneksi Anda',
            'tagline'         => 'Terhubung Lebih Cepat, Bekerja Lebih Baik',
            'tentang'         => 'PT Solusi Koneksi Anda adalah perusahaan penyedia layanan konektivitas dan infrastruktur jaringan yang melayani rumah tangga, usaha kecil, hingga perkantoran. Kami berkomitmen menghadirkan koneksi yang stabil, aman, dan terjangkau, didukung tim teknisi berpengalaman dan layanan purna jual yang responsif.',
            'visi'            => 'Menjadi penyedia solusi konektivitas terpercaya yang menghubungkan masyarakat dan dunia usaha dengan teknologi yang andal.',
            'misi'            => "Menyediakan layanan internet dan jaringan yang stabil dan terjangkau.\nMemberikan pelayanan teknis yang cepat, ramah, dan profesional.\nMengembangkan solusi jaringan yang sesuai kebutuhan pelanggan.\nMenjaga keamanan dan kerahasiaan data pelanggan.\nMendukung pertumbuhan usaha masyarakat melalui teknologi.",
        ]);
    }
}