<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    // Menampilkan daftar pengumuman untuk admin/dashboard
    public function index()
    {
        $daftarPengumuman = Pengumuman::latest()->get();
        return view('pengumuman', compact('daftarPengumuman'));
    }

    // Menampilkan detail lengkap satu pengumuman
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('detail-pengumuman', compact('pengumuman'));
    }

    // Menyimpan pengumuman baru
    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('pengumuman', 'public');
        }

        Pengumuman::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto'      => $path,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    // Mengubah data pengumuman
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);

        $path = $pengumuman->foto;
        if ($request->hasFile('foto')) {
            if ($pengumuman->foto) {
                Storage::disk('public')->delete($pengumuman->foto);
            }
            $path = $request->file('foto')->store('pengumuman', 'public');
        }

        $pengumuman->update([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto'      => $path,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diubah!');
    }

    // Menghapus pengumuman
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->foto) {
            Storage::disk('public')->delete($pengumuman->foto);
        }

        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus!');
    }
}