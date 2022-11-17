<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Alert;

class AdminController extends Controller
{
    // DASHBOARD
    public function index(){
       return view('pages.admin',[
            'item' => DB::table('admins')->paginate(10),
       ]); 
    }

    // Tampilan Create Admin
    public function create(){
        return view('pages.admin_add');
    }

    // Create Admin
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
        Admin::create($validatedData); //untuk menyimpan data
        
        // toast('Registration has been successful','success');
        return redirect()->intended('/admin');
    }

    // Tampilan Edit
    public function edit($id){
        return view("pages.admin_edit",[
            'title' => 'User - Edit Admin',
            'item' => Admin::find($id),
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
    	$user = Admin::find($id);
    	$user->namaLengkap = $request->namaLengkap;
        $user->username = $request->username;
        $user->alamat = $request->alamat;
        $user->noHp = $request->noHp;
        $user->jenisKelamin = $request->jenisKelamin;
        $user->tempatLahir = $request->tempatLahir;
        $user->tanggalLahir = $request->tanggalLahir;
    	$user->save();
    	
        // toast('Your data has been saved!','success');
    	return redirect("/admin"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	Admin::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        // toast('Your data has been deleted!','success');
    	return redirect("/admin"); // untuk diarahkan kemana
    }  
}
