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
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'confirmed'],
            'pengguna' => ['required', 'in:user,kontributor,admin']

        ]);

        if ($request->pengguna === 'admin') {
            $emailDiizinkan = ['admin@mail.com', 'juwita@example.com'];
            if(!in_array($request->email, $emailDiizinkan)){
                return back()->withErrors([
                    'pengguna' => 'anda tidak diizinkan menjadi admin'
                ])->withInput();
            }
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->pengguna
        ]);

        return redirect()->route('login');
    }


    public function login(Request $request){
        $dataLogin = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(Auth::attempt($dataLogin)){
            $request->session()->regenerate();
            return redirect('/home');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}