<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    function Login(Request $request){
        if($request->method() == 'GET'){
            return view('auth.login');
        }
        $email = $request->email;

        $password  = $request->password;
        // dd($email);

        $pengguna = Pengguna::where("email", $email)->first();

        if($pengguna == null){
            return redirect()->back()->withErrors(['msg'=>'Email tidak ditemukan']);
        }

        if(!Hash::check($password, $pengguna->password)){
            return redirect()->back()->withErrors(['msg'=>'Password Salah']);    
        }
        if(!session()->isStarted()) session()->start();
        session()->put('logged', true);
        session()->put('idPengguna', $pengguna->id);

        return redirect()->route('home');
    }
    
    function Logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
