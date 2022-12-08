<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Api;
use App\Models\Diagnosa;

class ApiController extends Controller
{
    public function __construct(){
        return $this->middleware('dokter') && $this->middleware('login');
    }

    public function callApi($id, Request $request){
        $ses_id = Http::get('https://api.endlessmedical.com/v1/dx/InitSession');
        $validatedData=$request->validate([
            'sessionID' => $ses_id['SessionID'],
            'namaLengkap' => 'required',
        ]);
        Diagnosa::update($validatedData); //untuk menyimpan data
        return redirect('/diagnosa');
    }

    public function startDiag($id, Request $request){
        $patient = Diagnosa::find($id);
        Http::asForm()->post('https://api.endlessmedical.com/v1/dx/AcceptTermsOfUse' , [
            'SessionID' => $patient->sessionID,
            'passphrase' => 'I have read, understood and I accept and agree to comply with the Terms of Use of EndlessMedicalAPI and Endless Medical services. The Terms of Use are available on endlessmedical.com',
        ]);
        return redirect('/add_sakit');
    }

    // UPDATE FEATURE
    public function updateFeature($id, Request $request) {
        $patient = Diagnosa::find($id);
        Http::post('https://api.endlessmedical.com/v1/dx/UpdateFeature' , [
            'SessionID' => $patient->sessionID,
            'name' => $request->nama,
            'value' => $request->nilai
        ]);
        return redirect('/add_sakit')->with('ses', $patient->sessionID);
    }

    // ANALYZE
    public function analyzeFeature($id, Request $request) {
        $patient = Diagnosa::find($id);
        Http::get('https://api.endlessmedical.com/v1/dx/Analyze' , [
            'SessionID' => $patient->sessionID,
            'NumberOfResults' => 10,
            'ResponseFormat' => 'json',
        ]);
    }
}
