<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = ['nama', 'deskripsi', 'harga', 'foto'];

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