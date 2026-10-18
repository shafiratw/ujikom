<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Galeri extends Model
{
    protected $table = 'galeris';

    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
    ];

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