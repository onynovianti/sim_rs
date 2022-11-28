<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Obat;

class ObatController extends Controller
{
    // public function __construct(){
    //     return $this->middleware('apoteker') && $this->middleware('login');
    // }
    
    public function callApi(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://softpharm-drug-medicine-api.p.rapidapi.com/%7BPATH%7D",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    // DASHBOARD
    public function index(){
       return view('pages.obat',[
            'item' => DB::table('obats')->paginate(10),
       ]);  
    }

    // Tampilan Create Admin
    public function create(){
        return view('pages.obat_add');
    }

    // Create Admin
    public function store(Request $request){
        $validatedData=$request->validate([
            'nama' => 'required',
            'deskripsi' => 'required|min:10',
            'jumlah' => 'required',
            'harga' => 'required',
            'tanggalKadaluarsa' => 'required'
        ]);
        Obat::create($validatedData); //untuk menyimpan data
        
        // toast('Registration has been successful','success');
        return redirect()->intended('/obat');
    }

    // Tampilan Edit
    public function edit($id){
        return view("pages.obat_edit",[
            'title' => 'User - Edit Obat',
            'item' => Obat::find($id),
        ]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'nama' => 'required',
            'deskripsi' => 'required|min:10',
            'jumlah' => 'required',
            'harga' => 'required',
            'tanggalKadaluarsa' => 'required'
        ]);

        // Menyimpan update
    	$user = Obat::find($id);
    	$user->nama = $validatedData['nama'];
        $user->deskripsi = $validatedData['deskripsi'];
        $user->jumlah = $validatedData['jumlah'];
        $user->harga = $validatedData['harga'];
        $user->tanggalKadaluarsa = $validatedData['tanggalKadaluarsa'];
    	$user->save();
    	
        // toast('Your data has been saved!','success');
    	return redirect("/obat"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	Obat::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        // toast('Your data has been deleted!','success');
    	return redirect("/obat"); // untuk diarahkan kemana
    }  
}
