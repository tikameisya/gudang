<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('barang.login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['user' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }    
    
    public function register(){
        return view('barang.register');
    }

    public function registeruser(Request $request){
        User::create([
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'role'=>'user',
            'remember_token'=> Str::random(60),
        ]);

        return redirect('/login')->with('berhasil', 'register berhasil!!, Silahkan Login');
    }
    

}
