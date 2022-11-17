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
        return view("admin.user_editadmin",[
            'title' => 'User - Edit Admin',
            'item' => Admin::find($id),
        ]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
        ]);

        // Menyimpan update
    	$user = User::find($id);
    	$user->name = $request->name;
        $user->email = $request->email;
    	$user->save();
    	
        toast('Your data has been saved!','success');
    	return redirect("/user_admin"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	User::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        toast('Your data has been deleted!','success');
    	return redirect("/user_admin"); // untuk diarahkan kemana
    }  
}
