<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDO;

class UserController extends Controller
{
    public function index() {
        return view('landing');
    }

    public function register(){
        return view('register');
    }
    
    public function login(){
        return view('login');
    }
    
    public function dashboard(){
        return view('dashboard');
    }

    public function postRegister (Request $request){
        $validatedata = $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'city' => 'required',
            'no_hp' => 'required',
        ]);

        $validatedata['password'] = bcrypt($validatedata['password']);

        User::create($validatedata);

        return redirect('/')->with('berhasil', 'Register Berhasil, Silahkan Login!');
    }

    public function postLogin (Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('berhasil', 'Login Berhasil');
        }
 
        return back()->with('error', 'Login gagal');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
