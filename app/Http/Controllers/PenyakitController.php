<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Pasien;

class PenyakitController extends Controller
{

    public function show()
    {
        return view('pages.diagnosa_select', [
            'item' => DB::table('pasiens')
            ->paginate(10),
        ]);
    }

    // Middleware
    public function __construct(){
        return $this->middleware('dokter') && $this->middleware('login');
    }

    // DASHBOARD
    public function index(){
        return view('pages.penyakit', [
             'asas' => DB::table('diagnosis')
             ->paginate(10),
        ]);
    }

    // Buat Record
    public function create($id){
        return view('pages.penyakit_add', [
            'item' => Pasien::find($id),
        ]);
    }

    // Mulai Diagnosis
    public function add(){
        $path = storage_path() . "/json/SymptomsOutput.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true);
        // dd($json);
        return view('pages.penyakit_add', [
            'json' => $json,
        ]);
    }

}
