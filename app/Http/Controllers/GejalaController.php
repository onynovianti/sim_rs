<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnosa;
use App\Models\Pasien;
use App\Models\Gejala;
use Alert;

class GejalaController extends Controller
{
    // Tampilan Create Gejala
    public function create(){

    }

    // Create Gejala
    public function store(Request $request, $id){
        $validatedData=$request->validate([
            'idDiag' => $id,
            'name' => 'required',
            'value' => 'required',
        ]);

        Gejala::create($validatedData); //untuk menyimpan data

        // toast('Registration has been successful','success');
        return redirect()->intended('/gejala');
    }

    // Tampilan Edit
    public function edit($id){
        return view("pages.gejala_edit",[
            'title' => 'User - Edit Admin',
            'item' => Gejala::find($id),
        ]);
    }

    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'idDiag' => 'required',
            'name' => 'required',
            'value' => 'required',
        ]);

        // Menyimpan update
        $user = Gejala::find($id);
        $user->name = $request->name;
        $user->value = $request->username;
        $user->save();

        // toast('Your data has been saved!','success');
        return redirect("/gejala"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
        $data = Gejala::find($id);
        Gejala::destroy($id);
        // Session::flash('hapussuccess', 'Data berhasil dihapus!');
        // toast('Your data has been deleted!','success');
        return redirect("/diagnosa/session/$data->idDiag"); // untuk diarahkan kemana
    }
}
