<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function lihatRegister(){
        return view('auth.register');
    }

    public function lihatLogin(){
        return view('auth.login');
    }

    public function register(Request $request){

        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            // 'role' => 'required'
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            // 'role' => $request['role']
        ]);

        return redirect('/login');
    }

    public function login(Request $request){
        $dataLogin = $request->only('email', 'password');

        if(Auth::attempt($dataLogin)){
            return redirect('/home');
        }

        return back()->withErrors('email');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function lihatPengguna(){
        $pengguna = User::all();
        return view('pengguna.lihatPengguna', compact('pengguna'));
    }

    public function HapusPengguna($id){
        $pengguna = User::find($id);
        $pengguna->delete();
        return redirect()->route('lihatPengguna');
    }
}