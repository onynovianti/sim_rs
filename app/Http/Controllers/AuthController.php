<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Alert;

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
        switch($request->role){
            case "admin" :
                $user = DB::table('admins')->where('username', $request->username)->first();
                break;
            case 'dokter':
                $user = DB::table('dokters')->where('username', $request->username)->first();
                break;
            case "apoteker" :
                $user = DB::table('apotekers')->where('username', $request->username)->first();
                break;
            case "karyawan" :
                $user = DB::table('karyawans')->where('username', $request->username)->first();
                break;
        }

        //jika password benar
        if($user){
            if(Hash::check($request->password,$user->password)){
                session([
                    'isLogin' => true,
                    'role' => $request->role,
                    'id' => $user->id,
                    'username' => $user->username,
                    'namaLengkap' => $user->namaLengkap,
                    ]);
                // return redirect('/'.$request->role);
                return redirect('/dashboard');
            }
            //jika password salah
            return redirect('/')->with('error_password', 'Password Tidak Cocok');
        }
        
        //jika username tidak ada
        return redirect('/')->with('error_username', 'Username Tidak Ditemukan');
    }
    
    // Logout
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
