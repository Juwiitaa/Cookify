<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use App\Models\UserResep;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function home(){
        $resep = Resep::all();
        return view('home', compact('resep'));
    }
    public function resep(Request $request){
        $kategoriId = $request->query('kategori');
        $kategori = Kategori::all();
        $resep = Resep::with(['kategori', 'user'])
            ->when($kategoriId, function ($query) use ($kategoriId) {
                return $query->where('kategori_id', $kategoriId);
            })
            ->latest()
            ->get();
        return view('jelajahiResep', compact('resep', 'kategori'));
    }
    public function koleksi(){
        // $kategori = Kategori::all();
        // $resep = Resep::all();
        $simpan = UserResep::where('user_id', Auth::user()->id)->first();
        // dd($simpan);
        $data = !empty($simpan) ? Resep::where('id', $simpan->resep_id)->get() : null;

        return view('koleksi', compact('data'));
    }
    public function dashboard(){
        return view('dashboard');
    }

    
        
    
}
