<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Dashboard
    public function index(){
        $pegawai = DB::table('admin')->paginate(10);
       return view('pages.dashboard'); 
    }
}
