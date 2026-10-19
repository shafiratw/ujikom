<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->get();
        return view('admin.layanan', compact('produks'));
    }

    public function store(Request $request)
    {
        // Bersihkan input harga dari titik, koma, atau spasi (ubah jadi angka murni)
        $request->merge([
            'harga' => preg_replace('/[^0-9]/', '', $request->harga),
        ]);

        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga'     => 'nullable|integer|min:0',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('produk', 'public');
        }

        Produk::create($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Bersihkan input harga pada proses update juga
        $request->merge([
            'harga' => preg_replace('/[^0-9]/', '', $request->harga),
        ]);

        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga'     => 'nullable|integer|min:0',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $this->hapusFoto($produk->foto);
            $data['foto'] = $request->file('foto')->store('produk', 'public');
        }

        $produk->update($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $this->hapusFoto($produk->foto);
        $produk->delete();

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus!');
    }
}