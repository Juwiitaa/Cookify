<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepController extends Controller
{
    public function tambahResep(){
        $resep = Resep::all();
        $kategori = Kategori::all();
        return view('resep.tambahResep', compact('resep', 'kategori'));
    }

    public function lihatResep(){
        $resep = Resep::all();
        return view('resep.lihatResep', compact('resep'));
    }

    public function simpanResep(Request $request){
        $request->validate([
            'user_id' => 'required',
            
            'judul' => 'required|string',
            'bahan' => 'required|string',
            'description' => 'required|string',
            'steps' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        DB::beginTransaction();

        try {
            $check = Kategori::where('nama_kategori', $request->nama_kategori)->first();
        
        if(empty($check)){
            $resepKategori = new Kategori;
            $resepKategori->nama_kategori = $request->nama_kategori;
            // dd($resepKategori);
            $resepKategori->save();
            $check = $resepKategori;
        }

        $path = $request->file('photo')->store('resep', 'public');

        Resep::create([
            'user_id' => $request->user_id,
            'kategori_id' => $check->id,
            'judul' => $request->judul,
            'bahan' => $request->bahan,
            'description' => $request->description,
            'steps' => $request->steps,
            'photo' => $path
        ]);

        DB::commit();

        return redirect()->route('lihatResep');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function editResep($id){
        $resep = Resep::find($id);
        $kategori = Kategori::all();
        return view('resep.editResep', compact('resep', 'kategori'));
    }

    public function updateResep(Request $request, $id){
        $resep = Resep::find($id);
        $resep->user_id = $request->user_id;
        $resep->kategori_id = $request->kategori_id;
        $resep->judul = $request->judul;
        $resep->bahan = $request->bahan;
        $resep->description = $request->description;
        $resep->steps = $request->steps;
        
        $path = $request->file('photo')->store('resep', 'public');
        $resep->photo = $path;

        $resep->update();

        return redirect()->route('lihatResep');
    }

    public function hapusResep($id){
        $resep = Resep::find($id);
        $resep->delete();
        return redirect()->route('lihatResep');
    }

    public function detailResep($id){
        $resep = Resep::with(['kategori', 'user'])->findOrFail($id);
        return view('resep.detailResep', compact('resep'));
    }
    
}
