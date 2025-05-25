<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function home(){
        return view('home');
    }
    public function resep(){
        return view('jelajahiResep');
    }
    public function reels(){
        return view('reels');
    } 
    public function koleksi(){
        return view('koleksi');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
