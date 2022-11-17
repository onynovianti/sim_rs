<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function __construct(){
        return $this->middleware('admin') && $this->middleware('login');
    }

    // DASHBOARD
    public function index(){
        return view('pages.karyawan',[
             'item' => DB::table('karyawans')->paginate(10),
        ]); 
     }
 
     // Tampilan Create Karyawan
     public function create(){
         return view('pages.karyawan_add');
     }
 
     // Create Karyawan
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
         Karyawan::create($validatedData); //untuk menyimpan data
         
         // toast('Registration has been successful','success');
         return redirect()->intended('/karyawan');
     }
 
     // Tampilan Edit
     public function edit($id){
         return view("pages.karyawan_edit",[
             'title' => 'User - Edit Karyawan',
             'item' => Karyawan::find($id),
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

        // Menyimpan update data karyawan
    	$user = Karyawan::find($id);
    	$user->namaLengkap = $request->namaLengkap;
        $user->username = $request->username;
        $user->alamat = $request->alamat;
        $user->noHp = $request->noHp;
        $user->jenisKelamin = $request->jenisKelamin;
        $user->tempatLahir = $request->tempatLahir;
        $user->tanggalLahir = $request->tanggalLahir;
    	$user->save();
    	
        // toast('Your data has been saved!','success');
    	return redirect("/karyawan"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
         Karyawan::destroy($id);
         return redirect("/karyawan"); // untuk diarahkan kemana
     }
}
