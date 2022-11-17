<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
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
         Karyawan::create($validatedData); //untuk menyimpan data
         
         // toast('Registration has been successful','success');
         return redirect()->intended('/karyawan');
     }
 
     // Tampilan Edit
     public function edit($id){
         return view("karyawan.user_editkaryawan",[
             'title' => 'User - Edit Karyawan',
             'item' => Karyawan::find($id),
         ]);
     }
         
     // Simpan Hasil Edit
     public function update(Request $request, $id){
         $validatedData=$request->validate([
             'name' => 'required|min:5',
             'email' => 'required',
         ]);
 
         // Menyimpan update
         $user = Karyawan::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->save();
         
         toast('Your data has been saved!','success');
         return redirect("/user_karyawan"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
         Karyawan::destroy($id);
         // Session::flash('hapussuccess', 'Data berhasil dihapus!');
         toast('Your data has been deleted!','success');
         return redirect("/user_karyawan"); // untuk diarahkan kemana
     }
}
