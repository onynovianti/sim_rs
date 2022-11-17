<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use Alert;

class DokterController extends Controller
{

    public function __construct(){
        return $this->middleware('admin') && $this->middleware('login');
    }

    // DASHBOARD
    public function index(){
        return view('pages.dokter',[
             'item' => DB::table('dokters')->paginate(10),
        ]); 
     }
 
     // Tampilan Create Dokter
     public function create(){
         return view('pages.dokter_add');
     }
 
     // Create Dokter
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

         Dokter::create($validatedData); //untuk menyimpan data
         
         // toast('Registration has been successful','success');
         return redirect()->intended('/dokter');
     }
 
     // Tampilan Edit
     public function edit($id){
         return view("pages.dokter_edit",[
             'title' => 'User - Edit Admin',
             'item' => Dokter::find($id),
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
         $user = Dokter::find($id);
         $user->namaLengkap = $request->namaLengkap;
         $user->username = $request->username;
         $user->alamat = $request->alamat;
         $user->noHp = $request->noHp;
         $user->jenisKelamin = $request->jenisKelamin;
         $user->tempatLahir = $request->tempatLahir;
         $user->tanggalLahir = $request->tanggalLahir;
         $user->save();
         
         // toast('Your data has been saved!','success');
         return redirect("/dokter"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
        Dokter::destroy($id);
         // Session::flash('hapussuccess', 'Data berhasil dihapus!');
         // toast('Your data has been deleted!','success');
         return redirect("/dokter"); // untuk diarahkan kemana
     } 
}
