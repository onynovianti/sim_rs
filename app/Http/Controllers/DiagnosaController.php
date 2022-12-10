<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnosa;
use App\Models\Pasien;
use Alert;

class DiagnosaController extends Controller
{
    public function __construct()
    {
        return $this->middleware('dokter') && $this->middleware('login');
    }

    public function show()
    {
        return view('pages.diagnosa', [
            'asas' => DB::table('diagnosas')
                ->paginate(10),
        ]);
    }


    // DASHBOARD
    public function index()
    {
        return view('pages.diagnosa', [
            'asas' => DB::table('diagnosas')->paginate(10),
        ]);
    }

    // Tampilan Create Diagnosa
    public function create()
    {
        return view('pages.diagnosa_select', [
            'item' => DB::table('pasiens')->paginate(10),
        ]);
    }

    // Create Diagnosa
    public function store($id, Request $request)
    {
        $patient = Pasien::find($id);
        $validatedData = $request->validate([
            'namaLengkap' => $patient->namaLengkap,
        ]);
        Diagnosa::create($validatedData); //untuk menyimpan data

        // toast('Registration has been successful','success');
        return redirect()->intended('/diagnosa');
    }

    public function save(Request $request, $id)
    {
        $validatedData = $request->validate([
            'namaLengkap' => 'required',
        ]);
        Diagnosa::create($validatedData); //untuk menyimpan data

        // toast('Registration has been successful','success');
        return redirect()->intended('/diagnosa');
    }

    // Tampilan Edit
    public function edit($id)
    {
        return view("pages.diagnosa_edit", [
            'title' => 'User - Edit Diagnosa',
            'item' => Diagnosa::find($id),
        ]);
    }

    // Simpan Hasil Edit
    public function update(Request $request, $id)
    {
        $ses_id = Http::get('https://api.endlessmedical.com/v1/dx/InitSession');

        // Menyimpan update
        $user = Diagnosa::find($id);
        $user->sessionID = $ses_id['SessionID'];
        $user->save();

        // toast('Your data has been saved!','success');
        return redirect("/diagnosa"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id)
    {
        Diagnosa::destroy($id);
        // Session::flash('hapussuccess', 'Data berhasil dihapus!');
        // toast('Your data has been deleted!','success');
        return redirect("/diagnosa"); // untuk diarahkan kemana
    }

    public function add(Request $request, $id)
    {
        $patient = Diagnosa::find($id);
        $fiturGejala = json_decode($patient->fiturGejala, true);
        $diagnosisPenyakit = json_decode($patient->diagnosisPenyakit);
        $path = storage_path() . "/json/SymptomsOutput.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $feature = json_decode(file_get_contents($path), true);
        if ($patient->fiturGejala == null) {
            $fiturGejala =  "Kosong";
        };

        if ($patient->diagnosisPenyakit == null) {
            $diagnosisPenyakit = "Kosong";
        };

        $this->featureUpdate($request, $id);

        return view('pages.penyakit_add', [
            'patient' => $patient,
            'feature' => $feature,
            'fiturGejala' => $fiturGejala,
            'diagnosisPenyakit' => $diagnosisPenyakit,
        ]);
    }

    public function featureUpdate(Request $request, $id)
    {
        $patient = Diagnosa::find($id);
        Http::post('https://api.endlessmedical.com/v1/dx/UpdateFeature', [
            'SessionID' => $patient->sessionID,
            'name' => $request->nama,
            'value' => $request->nilai
        ]);

        $data = json_decode($patient->fiturGejala);

        $data2 = [];
        if ($data == null) {
            $data2[] = [
                'name' => $request->nama,
                'value' => $request->nilai
            ];
        } else {
            // foreach ($data as $j) {
            //     $data2[] = [
            //         'name' => $j['name'],
            //         'value' => $data['value']
            //     ];
            // }
            $data2[] = [
                'name' => $request->nama,
                'value' => $request->nilai
            ];
        }

        $patient->fiturGejala = json_encode($data2);
        $patient->save();
    }

    public function analyzeFeature($id, Request $request) {
        $patient = Diagnosa::find($id);
        Http::get('https://api.endlessmedical.com/v1/dx/Analyze' , [
            'SessionID' => $patient->sessionID,
            'NumberOfResults' => 10,
            'ResponseFormat' => 'json',
        ]);
    }
}
