<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerusahaan;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        $profil = ProfilPerusahaan::firstOrFail();
        return view('admin.profil', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = ProfilPerusahaan::firstOrFail();

        $data = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'tahun_berdiri'   => 'nullable|string|max:10',
            'tagline'         => 'nullable|string|max:255',
            'tentang'         => 'required|string',
            'visi'            => 'required|string',
            'misi'            => 'required|string',
        ]);

        $profil->update($data);

        return redirect()->route('admin.profil.edit')->with('success', 'Profil perusahaan berhasil diperbarui!');
    }
}