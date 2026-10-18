<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

abstract class Controller
{
    // Hapus foto hasil upload; foto bawaan di public/images tidak disentuh
    protected function hapusFoto(?string $foto): void
    {
        if ($foto && !Str::startsWith($foto, 'images/')) {
            Storage::disk('public')->delete($foto);
        }
    }
}