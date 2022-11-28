<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        return $this->middleware('login');
    }

    // Dashboard
    public function index(){
        return view('pages.dashboard', [
             'jml_admin' => DB::table('admins')->count(),
             'jml_apoteker' => DB::table('apotekers')->count(),
             'jml_dokter' => DB::table('dokters')->count(),
             'jml_karyawan' => DB::table('karyawans')->count(),
             'jml_pasien' => DB::table('pasiens')->count(),
        ]);
     }
}
