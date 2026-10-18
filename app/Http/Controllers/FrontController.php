<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Produk;

class FrontController extends Controller
{
    // $profil dan $profil_perusahaans sudah dikirim otomatis lewat AppServiceProvider

    public function home()
    {
        return view('front.home', [
            'produks'  => Produk::latest()->take(4)->get(),
            'artikels' => Artikel::latest()->take(3)->get(),
            'galeris'  => Galeri::latest()->take(6)->get(),
        ]);
    }

    public function profil()
    {
        return view('front.profil');
    }

    public function layanan()
    {
        return view('front.layanan', [
            'produks' => Produk::latest()->get(),
        ]);
    }

    public function artikel()
    {
        return view('front.artikel', [
            'artikels' => Artikel::latest()->get(),
        ]);
    }

    public function artikelShow($id)
    {
        return view('front.artikel-detail', [
            'artikel' => Artikel::findOrFail($id),
            'lainnya' => Artikel::where('id', '!=', $id)->latest()->take(3)->get(),
        ]);
    }

    public function galeri()
    {
        return view('front.galeri', [
            'galeris' => Galeri::latest()->get(),
        ]);
    }

    public function kontak()
    {
        return view('front.kontak');
    }
}