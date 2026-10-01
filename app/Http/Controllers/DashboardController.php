<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Galeri; // <-- 1. Aktifkan/Uncomment ini
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalPengumuman' => Pengumuman::count(),
            'totalGaleri' => Galeri::count(), // <-- 2. Ambil total dari database Galeri
            'totalAdmin' => User::count(),
            'galeriTerbaru' => Galeri::latest()->take(4)->get(), // <-- 3. Ambil data galeri terbaru
            'pengumumanTerbaru' => Pengumuman::latest()->take(3)->get(),
        ]);
    }
}