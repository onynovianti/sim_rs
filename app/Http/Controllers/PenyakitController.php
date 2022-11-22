<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    // Middleware
    public function __construct(){
        return $this->middleware('dokter') && $this->middleware('login');
    }

    // DASHBOARD
    public function index(){
        return view('pages.diagnosa', [
             'asas' => DB::table('diagnosis')->paginate(10),
        ]);
    }

    // Buat Record
    public function create(){
        return view('pages.diagnosa_add');
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
