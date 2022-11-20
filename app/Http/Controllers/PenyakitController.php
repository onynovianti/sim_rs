<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    // Middleware
    public function __construct(){
        return $this->middleware('dokter') && $this->middleware('login');
    }

    // DASHBOARD
    public function index(){
        return view('pages.penyakit'); 
    }

    // DASHBOARD
    public function add(){
        $path = storage_path() . "/json/SymptomsOutput.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        // dd($json);
        return view('pages.penyakit_add', [
            'json' => $json,
        ]); 
    }
     
}
