<?php

namespace App\Http\Controllers;
use PDF;
use DB;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index() 
    {
        $pdf = PDF::loadView('pages.dashboard', [
            'jml_admin' => DB::table('admins')->count(),
            'jml_apoteker' => DB::table('apotekers')->count(),
            'jml_dokter' => DB::table('dokters')->count(),
            'jml_karyawan' => DB::table('karyawans')->count(),
            'jml_pasien' => DB::table('pasiens')->count(),
           //  'jml_pasien' => Pasien::get()->count(),
           //  'pasien_laki' => DB::select(DB::raw("SELECT count(*) as jumlah FROM pasiens WHERE jenisKelamin = 1")),
           //  'pasien_wanita' => DB::select(DB::raw("SELECT count(*) as jumlah FROM pasiens WHERE jenisKelamin = 0")),
            'pasien_laki' => Pasien::where('jenisKelamin','1')->count(),
            'pasien_wanita' => Pasien::where('jenisKelamin','0')->count(),
       ]);

        return $pdf->download('simfk.pdf');
    }
}
