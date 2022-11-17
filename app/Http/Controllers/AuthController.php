<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Halaman Login
    public function login(){
        if(session('isLogin') == true){
            return redirect('/dashboard');
        }
        
        return view('/');
    }
    
    // Cek login
    public function store(Request $request){
        
        //jika username ada 
        $request->role='admin';
        switch($request->role){
            case "admin" :
                $user = DB::table('admin')->where('username', $request->username)->first();
                break;
        }
        
        if($user){
            //jika password benar
            if(Hash::check($request->password,$user->password)){
                session([
                    'isLogin' => true,
                    'id' => $user->id,
                    'username' => $user->username,
                    ]);
                return redirect('/dashboard');
            }
            
            //jika password salah
            return redirect('/')->with('password', 'Password tidak cocok');
        }
        
        //jika username tidak ada
        return redirect('/')->with('error_username', 'Username tidak cocok');
    }
    
    // Logout
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
