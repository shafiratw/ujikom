<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    protected $table = 'artikels';

    protected $fillable = ['judul', 'isi', 'foto'];

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