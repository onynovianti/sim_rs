<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Transaksi;
use Illuminate\Contracts\Support\ValidatedData;

class TransaksiController extends Controller
{
    public function index(){
        return view('pages.transaksi',[
            'item' => Transaksi::with(['dokter','obat'])->paginate(10),
            // dd(Dokter::find(1)->transaksi)
            // dd(Transaksi::with('dokter')->get())
        ]); 
     }
 
     // Tampilan Create 
    public function create(){
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        $obat = Obat::all();
        return view('pages.transaksi_add', [
            'dokter'=>$dokter,
            'pasien'=>$pasien,
            'obat'=>$obat
        ]); 
    }
 
     // Create 
    public function store(Request $request){
        $validatedData = $request->validate([
            'dokter_id' => 'required',
            'pasien_id' => 'required',
            'obat_id' => 'required',
        ]);
        $validatedData['status'] = 0;
        // dd($validatedData);
        Transaksi::create($validatedData);

        return redirect('/transaksi')->with('success, Transaksi telah ditambahkan');
    }

    public function verify(Request $request){
  
     Transaksi::find($request->id)->update(['status'=>1]);

        return redirect('/transaksi');
    }

    // public function block(Request $request){
       
    //     $transaksi = Transaksi::find($request)->first();
    //     if($transaksi){
    //         $transaksi->verify = '0';
    //         $transaksi->save();
    //     }

    //     return redirect('/transaksi');
    // }
 
     // Tampilan Edit
     public function edit($id){
        
     }
         
     // Simpan Hasil Edit
     public function update(Request $request, $id){
        
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
        
     }

}
