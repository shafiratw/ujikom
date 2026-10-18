<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Contact;
use App\Models\Galeri;
use App\Models\Produk;
use App\Models\ProfilPerusahaan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalProduk'    => Produk::count(),
            'totalArtikel'   => Artikel::count(),
            'totalGaleri'    => Galeri::count(),
            'totalPesan'     => Contact::count(),
            'profilData'     => ProfilPerusahaan::first(),
            'galeriTerbaru'  => Galeri::latest()->take(4)->get(),
            'artikelTerbaru' => Artikel::latest()->take(3)->get(),
        ]);
    }
}