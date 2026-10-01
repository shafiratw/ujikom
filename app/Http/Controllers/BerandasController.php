<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class BerandasController extends Controller
{
    public function show($id){
        $pengumuman = Pengumuman::findOrFail($id);
        return view ('detail-pengumuman', compact('pengumuman'));
    }
}
