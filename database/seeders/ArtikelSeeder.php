<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Tips Memilih Paket Internet Rumah yang Tepat',
                'isi'   => "Memilih paket internet tidak cukup hanya melihat harga. Perhatikan jumlah perangkat yang terhubung, kebutuhan harian seperti streaming dan video call, serta stabilitas koneksi saat jam sibuk.\n\nUntuk keluarga dengan 4 hingga 6 perangkat aktif, kecepatan 30 hingga 50 Mbps umumnya sudah nyaman. Jika ada kebutuhan bekerja dari rumah atau bermain gim daring, pilih paket dengan kecepatan lebih tinggi dan latensi rendah.\n\nTim kami siap membantu menghitung kebutuhan Anda secara gratis sebelum pemasangan.",
                'foto'  => 'images/artikel1.jpg',
            ],
            [
                'judul' => 'Mengapa Jaringan Kantor Perlu Dirawat Secara Berkala',
                'isi'   => "Jaringan yang jarang dirawat rentan mengalami penurunan performa, kabel longgar, hingga celah keamanan pada perangkat. Maintenance berkala membantu menemukan masalah sebelum berdampak pada pekerjaan.\n\nKegiatan rutin yang dilakukan meliputi pengecekan perangkat, pembaruan firmware, pengujian kecepatan, dan evaluasi keamanan jaringan.",
                'foto'  => 'images/artikel2.jpg',
            ],
            [
                'judul' => 'PT Solusi Koneksi Anda Perluas Jangkauan Layanan',
                'isi'   => "Untuk menjawab kebutuhan konektivitas yang terus meningkat, PT Solusi Koneksi Anda memperluas jangkauan layanan ke beberapa wilayah baru di Kota dan Kabupaten Bogor.\n\nPerluasan ini diharapkan membuat lebih banyak rumah dan pelaku usaha dapat menikmati internet yang cepat dan stabil dengan pemasangan yang mudah dan cepat.",
                'foto'  => 'images/artikel3.jpg',
            ],
        ];

        foreach ($data as $item) {
            Artikel::create($item);
        }
    }
}