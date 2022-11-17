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
        $accept = Http::get('https://api.endlessmedical.com/v1/dx/AcceptTermsOfUse' , [
            'SessionID' => $ses_id['SessionID'],
            'passphrase' => 'I have read, understood and I accept and agree to comply with the Terms of Use of EndlessMedicalAPI and Endless Medical services. The Terms of Use are available on endlessmedical.com',
        ]);

        $pilihan = 0;
        switch($pilihan){
            case 0:
                $update = Http::get('https://api.endlessmedical.com/v1/dx/UpdateFeature' , [
                    'SessionID' => $ses_id['SessionID'],
                    'name' => 'BMI',
                    'value' => '33',
                ]);
                break;
            case 1:
                $hasil = Http::get('https://api.endlessmedical.com/v1/dx/Analyze' , [
                    'SessionID' => $ses_id['SessionID'],
                    'NumberOfResults' => 10,
                    'ResponseFormat' => 'json',
                ]);
                break;
        }
        // return view('pages.dashboard'); 
    }
}
