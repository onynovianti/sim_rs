<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Api;

class ApiController extends Controller
{
    public function __construct(){

    }

    public function callApi($id, Request $request){
        $ses_id = Http::get('https://api.endlessmedical.com/v1/dx/InitSession');
        Http::asForm()->post('https://api.endlessmedical.com/v1/dx/AcceptTermsOfUse' , [
            'SessionID' => $ses_id['SessionID'],
            'passphrase' => 'I have read, understood and I accept and agree to comply with the Terms of Use of EndlessMedicalAPI and Endless Medical services. The Terms of Use are available on endlessmedical.com',
        ]);
        $validatedData=$request->validate([
            'sessionID' => $ses_id['SessionID'],
            'namaLengkap' => 'required',
            'fiturGejala' => 'required',
            'diagnosisPenyakit' => 'required'
        ]);
        Api::create($validatedData); //untuk menyimpan data
        return redirect('/add_sakit')->with('ses', $ses_id['SessionID']);
    }

    // UPDATE FEATURE
    public function updateFeature($id, Request $request) {
        $patient = Api::find($id);
        Http::post('https://api.endlessmedical.com/v1/dx/UpdateFeature' , [
            'SessionID' => $patient->sessionID,
            'name' => $request->nama,
            'value' => $request->nilai
        ]);
        // dd($ses_id);
    }

    // ANALYZE
    public function analyzeFeature($id, Request $request) {
        $patient = Api::find($id);
        Http::get('https://api.endlessmedical.com/v1/dx/Analyze' , [
            'SessionID' => $patient->sessionID,
            'NumberOfResults' => 10,
            'ResponseFormat' => 'json',
        ]);
    }
}
