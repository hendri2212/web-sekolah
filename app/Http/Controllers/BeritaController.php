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
        //return json_decode($berita);
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

      
        
        //confirmDelete
        public function confirmDelete($id)
        {
            $berita = Berita::findOrFail($id);
            return view('berita.delete', compact('berita'));
        }

        //destroy
        public function destroy($id)
        {
            $berita = Berita::findOrFail($id);

            // Hapus file gambar jika ada
            if (!empty($berita->gambar)) {
                $gambarPath = public_path('gambar/' . $berita->gambar);
                if (file_exists($gambarPath)) {
                    unlink($gambarPath);
                }
            }

            $berita->delete();

            return redirect('/berita');
        }
 
        //show
        public function show($id)
        {
            $berita = Berita::findOrFail($id);
            return view('berita.show', compact('berita'));
        }
    

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;

        if ($request->hasFile('gambar')) {
            $gambarLamaPath = public_path('gambar/'.$berita->gambar);
            if (!empty($berita->gambar) && file_exists($gambarLamaPath)) {
                unlink($gambarLamaPath);
            }

            $namaGambar = time().'.'.
            $request->gambar->extension();
            $request->gambar->move(public_path('gambar'),
            $namaGambar);
            $berita->gambar = $namaGambar;
        }

        $berita->save();

        return redirect('/berita');
    }
 
}
