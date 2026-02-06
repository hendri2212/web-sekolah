<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $namaGambar = null;

        if ($request->hasFile('gambar')) {
            $namaGambar = time().'.'.
            $request->gambar->extension();
            $request->gambar->move(public_path('gambar'),
            $namaGambar);
        }
        
        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' =>$namaGambar,
            'tanggal' => now()
        ]);

        return redirect('/berita');
    }
}
