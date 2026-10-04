<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::latest()->get();

        return view('rating', compact('ratings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bintang' => 'required|integer|min:1|max:5',
            'nama_pengunjung' => 'nullable|string|max:100',
            'ulasan' => 'nullable|string|max:500',
        ]);

        // SIMPAN KE DATABASE
        Rating::create([
            'bintang' => $request->bintang,
            'nama_pengunjung' => $request->nama_pengunjung ?? 'Pengunjung',
            'ulasan' => $request->ulasan,
        ]);

        // KEMBALI KE HALAMAN SEBELUMNYA
        return back()->with(
            'success_rating',
            'Terima kasih atas penilaian dan ulasan Anda!'
        );
    }

    public function destroy($id)
    {
        $rating = Rating::findOrFail($id);
        $rating->delete();

        return redirect()->route('rating.index')
            ->with('success', 'Penilaian berhasil dihapus.');
    }
}
