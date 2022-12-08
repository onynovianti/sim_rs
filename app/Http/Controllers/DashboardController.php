<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Transaksi;

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
             'jml_transaksi' => DB::table('transaksis')->count(),
            //  'jml_pasien' => Pasien::get()->count(),
            //  'pasien_laki' => DB::select(DB::raw("SELECT count(*) as jumlah FROM pasiens WHERE jenisKelamin = 1")),
            //  'pasien_wanita' => DB::select(DB::raw("SELECT count(*) as jumlah FROM pasiens WHERE jenisKelamin = 0")),
             'pasien_laki' => Pasien::where('jenisKelamin','1')->count(),
             'pasien_wanita' => Pasien::where('jenisKelamin','0')->count(),
             'jml_obat' => DB::table('obats')->count(),
             'obat_diatas' => Obat::where('jumlah','>','50')->count(),
             'obat_dibawah' => Obat::where('jumlah','<','50')->count(),
             'transaksi_berhasil' => Transaksi::where('status','1')->count(),
             'transaksi_pending' => Transaksi::where('status','0')->count(),
        ]);
     }

     // GET DATA
     public function getChartPasien($val){
        if($val == 'year'){
            $syntax = "SELECT MONTH(created_at) as Bulan, COUNT(alamat) as Jumlah FROM pasiens WHERE YEAR(created_at) = '2022' GROUP BY MONTH(created_at)";
        }else if($val == 'month'){
            $syntax = "SELECT MONTH(created_at) as Bulan, COUNT(alamat) as Jumlah FROM pasiens WHERE YEAR(created_at) = '2022' GROUP BY MONTH(created_at)";
        }else{
            $syntax = "SELECT COUNT(*) FROM pasiens WHERE YEAR(created_at) = '2022' GROUP BY MONTH(created_at)";
        }
        return DB::select(DB::raw($syntax));
     }

     // GET DATA
     public function getChartObat($val){
        if($val == 'year'){
            $syntax = "SELECT MONTH(created_at) as Bulan, COUNT(*) as Jumlah FROM obats WHERE YEAR(created_at) = '2022' GROUP BY MONTH(created_at)";
        }
        return DB::select(DB::raw($syntax));
     }

     // GET DATA
     public function getChartTransaksi($val){
        if($val == 'year'){
            $syntax = "SELECT MONTH(created_at) as Bulan, COUNT(*) as Jumlah FROM transaksis WHERE YEAR(created_at) = '2022' GROUP BY MONTH(created_at)";
        }
        return DB::select(DB::raw($syntax));
     }
}
