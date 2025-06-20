<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use App\Models\User;
use App\Models\UserResep;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function tambah($id){
        $user = new UserResep;
        $user->user_id = Auth::user()->id;
        $user->resep_id = $id;
        $user->save();
        return redirect()->back();
    }
    public function hapus($id){
        $unfavorit = UserResep::where('resep_id',$id)->first();
        $unfavorit->delete();
        return redirect()->back();
    }


}
