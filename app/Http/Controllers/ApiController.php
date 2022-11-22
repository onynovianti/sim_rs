<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        switch($id){
            // UPDATE FEATURE
            case 0:
                $update = Http::post('https://api.endlessmedical.com/v1/dx/UpdateFeature' , [
                    'SessionID' => $ses_id['SessionID'],
                    'name' => $request->nama,
                    'value' => $request->nilai,
                ]);
                break;
                // dd($ses_id);
            case 1:
                // ANALYZE
                $hasil = Http::get('https://api.endlessmedical.com/v1/dx/Analyze' , [
                    'SessionID' => $ses_id['SessionID'],
                    'NumberOfResults' => 10,
                    'ResponseFormat' => 'json',
                ]);
                break;
        }
        return redirect('/add_sakit')->with('ses', $ses_id['SessionID']);
    }
}
