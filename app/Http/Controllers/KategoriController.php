<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function lihatKategori(){
        $kategori = Kategori::all();
        return view('kategori.lihatKategori', compact('kategori'));
    }

    public function tambahKategori(){
        return view('kategori.tambahKategori');
    }

    public function simpanKategori(Request $request){
        $request->validate([
            'nama_kategori' => 'required|string'
        ]);

        Kategori::create([
            'nama_kategori' =>$request->nama_kategori,
        ]);

        return redirect()->route('lihatKategori');
    }

    public function editKategori($id){
        $kategori = Kategori::find($id);
        return view('kategori.editKategori', compact('kategori'));
    }

    public function updateKategori(Request $request, $id){
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();
        return redirect()->route('lihatKategori');
    }

    public function hapusKategori($id){
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->route('lihatKategori');
    }
}
