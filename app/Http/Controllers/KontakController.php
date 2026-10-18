<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // ADMIN: daftar pesan masuk
    public function index()
    {
        $pesans = Contact::latest()->get();
        return view('admin.pesan', compact('pesans'));
    }

    // PUBLIK: simpan pesan dari form halaman Kontak
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Contact::create([
            'name'    => $request->nama,
            'email'   => $request->email,
            'message' => $request->pesan,
        ]);

        return redirect()->route('kontak')->with('success', 'Pesan Anda berhasil dikirim!');
    }

    // ADMIN: hapus pesan
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->route('admin.pesan.index')->with('success', 'Pesan berhasil dihapus!');
    }
}