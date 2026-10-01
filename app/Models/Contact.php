<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional, Laravel otomatis mencari tabel 'contacts' jika modelnya bernama 'Contact')
    protected $table = 'contacts';

    // Kolom yang diizinkan untuk diisi secara massal (mass assignment)
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}