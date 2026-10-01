<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // Menampilkan daftar galeri di halaman admin
    public function index()
{
    $galeri = Galeri::latest()->get();

    return view('galeri', compact('galeri'));
}   

    // Menyimpan data galeri baru dan upload foto
    public function store(Request $request)
{
    $request->validate([
        'deskripsi' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $path = $request->file('foto')->store('galeri', 'public');

    $galeri = new Galeri();
    $galeri->judul = $request->deskripsi;
    $galeri->deskripsi = $request->deskripsi;
    $galeri->foto = $path;
    $galeri->save();

    return redirect('/galeri')->with('success', 'Galeri berhasil ditambahkan!');
}
    // Mengubah data galeri (dan mengganti foto jika diunggah yang baru)
    public function update(Request $request, $id)
{
    $request->validate([
        'deskripsi' => 'required|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $galeri = Galeri::findOrFail($id);

    $galeri->judul = $request->deskripsi;
    $galeri->deskripsi = $request->deskripsi;

    if ($request->hasFile('foto')) {

        if ($galeri->foto && Storage::disk('public')->exists($galeri->foto)) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->foto = $request->file('foto')->store('galeri', 'public');
    }

    $galeri->save();

    return redirect('/galeri')->with('success', 'Galeri berhasil diperbarui!');
}

    // Menghapus data dan file foto dari storage
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file fisik foto
        if ($galeri->foto && Storage::disk('public')->exists($galeri->foto)) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->delete();

        return redirect('/galeri')->with('success', 'Galeri berhasil dihapus!');
    }
}