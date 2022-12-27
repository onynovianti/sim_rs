<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnosa;
use App\Models\Pasien;
use App\Models\Gejala;
use App\Models\Penyakit;
use Alert;

class DiagnosaController extends Controller
{
    // public function __construct()
    // {
    //     return $this->middleware('dokter') && $this->middleware('login');
    // }

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
        Http::asForm()->post('https://api.endlessmedical.com/v1/dx/AcceptTermsOfUse' , [
            'SessionID' => $ses_id['SessionID'],
            'passphrase' => 'I have read, understood and I accept and agree to comply with the Terms of Use of EndlessMedicalAPI and Endless Medical services. The Terms of Use are available on endlessmedical.com',
        ]);

        // Menyimpan update
        $user = Diagnosa::find($id);
        $user->diagnosisPenyakit = $request->name;
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

    public function add($id)
    {
        $diagnosa = Diagnosa::find($id);
        $fiturGejala = Diagnosa::find($id)->gejalas;
        $diagnosisPenyakit = Diagnosa::find($id)->penyakits;
        $diseases = storage_path() . "/json/DiseasesOutput.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $ouput = json_decode(file_get_contents($diseases), true);
        $symptom = storage_path() . "/json/SymptomsOutput.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $feature = json_decode(file_get_contents($symptom), true);
        if ($fiturGejala == null) {
            $fiturGejala =  "Kosong";
        };

        // if ($diagnosisPenyakit == null) {
        //     $diagnosisPenyakit = "Kosong";
        // };

        return view('pages.penyakit_add', [
            'output' => $ouput,
            'diagnosa' => $diagnosa,
            'feature' => $feature,
            'fiturGejala' => $fiturGejala,
            'diagnosisPenyakit' => $diagnosisPenyakit,
        ]);
    }

    // Create Gejala
    public function tambahGejala($id, Request $request)
    {
        $validatedData=$request->validate([
            'idDiag' => 'required',
            'name' => 'required',
            'value' => 'required',
        ]);

        Gejala::create($validatedData); //untuk menyimpan data

        return $this->add($id);
    }

    public function featureUpdate(Request $request, $id)
    {
        Http::post('https://api.endlessmedical.com/v1/dx/UpdateFeature', [
            'SessionID' => $id,
            'name' => $request->nama,
            'value' => $request->nilai
        ]);

        // $data = json_decode($patient->fiturGejala);

        // $data2 = [];
        // // if ($data == null) {
        // //     $data2[] = [
        // //         'name' => $request->nama,
        // //         'value' => $request->nilai
        // //     ];
        // // } else {
        // //     foreach ($data as $j) {
        // //         $data2[] = [
        // //             'name' => $j['name'],
        // //             'value' => $data['value']
        // //         ];
        // //     }
        // //     $data2[] = [
        // //         'name' => $request->nama,
        // //         'value' => $request->nilai
        // //     ];
        // // }

        // $patient->fiturGejala = json_encode($data2);
        // $patient->save();
    }

    public function tambahPenyakit(Request $request, $id){
        $validatedData=$request->validate([
            'idDiag' => 'required',
            'penyakit' => 'required',
        ]);

        Penyakit::create($validatedData); //untuk menyimpan data

        return $this->add($id);
    }
}
