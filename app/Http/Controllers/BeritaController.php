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

        //edit
        public function edit($id)
        {
            $berita = Berita::findOrFail($id);
            return view('berita.edit', compact('berita'));
        }

        //update
        public function update(Request $request, $id)
        {
            $berita = Berita::findOrFail($id);

            if($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $nama_file = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('gambar'), $nama_file);
                $berita->gambar = $nama_file;
                
            }

            $berita->judul=$request->judul;
            $berita->isi = $request->isi;
            $berita->save();
            return redirect('/berita');
        }
        
        //destroy
        public function destroy($id)
        {
            $berita = Berita::findOrFail($id);
            $berita->delete();

            return redirect('/berita');
        }
 
        //show
        public function show($id)
        {
            $berita = Berita::findOrFail($id);
            return view('berita.show', compact('berita'));
        }
    
}
