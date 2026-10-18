<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProfilPerusahaan extends Model
{
    protected $table = 'profil_perusahaans';

    protected $fillable = [
        'nama_perusahaan', 'tahun_berdiri', 'tagline', 'tentang', 'visi', 'misi'
    ];

    // Profil hanya punya 1 baris, ambil lewat ProfilPerusahaan::data()
    public static function data()
    {
        return static::first();
    }

    // Misi disimpan satu per baris, dipecah jadi array untuk ditampilkan
    public function getDaftarMisiAttribute()
    {
        return array_values(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $this->misi))));
    }

    public function getFotoUrlAttribute()
    {
        if (!$this->foto) {
            return null;
        }

        return Str::startsWith($this->foto, 'images/')
            ? asset($this->foto)
            : asset('storage/' . $this->foto);
    }
}