<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class KontakController extends Controller
{
    // Menampilkan daftar pesan di Panel Admin
    public function index()
    {
        // Mengambil data pesan terbaru dari database
        $contacts = Contact::latest()->get();

        // Mengirim data ke view admin
        return view('kontak', compact('contacts'));
    }


    // Menyimpan pesan dari halaman frontend
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'pesan'   => 'required|string',
        ]);

        // Menyimpan ke database
        Contact::create([
            'name'    => $request->nama,
            'email'   => $request->email,
            'message' => $request->pesan,
        ]);

        // Kembali ke halaman sebelumnya
        return redirect()
            ->back()
            ->with('success', 'Pesan Anda berhasil dikirim!');
    }


    // ==========================================
    // MENGHAPUS PESAN
    // ==========================================
    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $contact = Contact::findOrFail($id);

        // Hapus dari database
        $contact->delete();

        // Kembali ke halaman kontak
        return redirect()
            ->route('kontak.index')
            ->with('success', 'Pesan berhasil dihapus!');
    }
}