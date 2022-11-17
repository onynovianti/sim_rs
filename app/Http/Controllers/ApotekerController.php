<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Apoteker;
use Alert;

class ApotekerController extends Controller
{
    public function __construct(){
        return $this->middleware('admin') && $this->middleware('login');
    }
    
    // DASHBOARD
    public function index(){
       return view('pages.apoteker', [
            'asas' => DB::table('apotekers')->paginate(10),
       ]);
    }

    // Tampilan Create Admin
    public function create(){
        return view('pages.apoteker_add');
    }

    // Create Apoteker
    public function store(Request $request){
        $validatedData=$request->validate([
            'namaLengkap' => 'required',
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'alamat' => 'required|min:5',
            'noHp' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
        ]);
        $validatedData['password']=bcrypt($validatedData['password']);
        Apoteker::create($validatedData); //untuk menyimpan data

        // toast('Registration has been successful','success');
        return redirect()->intended('/apoteker');
    }

    // Tampilan Edit
    public function edit($id){
        return view("pages.apoteker_edit",[
            'title' => 'User - Edit Apoteker',
            'item' => Apoteker::find($id),
        ]);
    }

    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'namaLengkap' => 'required',
            'username' => 'required|min:5',
            'alamat' => 'required|min:5',
            'noHp' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
        ]);

        // Menyimpan update
    	$user = Apoteker::find($id);
    	$user->namaLengkap = $request->namaLengkap;
        $user->username = $request->username;
        $user->alamat = $request->alamat;
        $user->noHp = $request->noHp;
        $user->jenisKelamin = $request->jenisKelamin;
        $user->tempatLahir = $request->tempatLahir;
        $user->tanggalLahir = $request->tanggalLahir;
    	$user->save();

        // toast('Your data has been saved!','success');
    	return redirect("/apoteker"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	Apoteker::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        // toast('Your data has been deleted!','success');
    	return redirect("/apoteker"); // untuk diarahkan kemana
    }
}

