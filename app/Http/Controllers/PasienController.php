<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{

    // public function __construct(){
    //     return $this->middleware('karyawan') && $this->middleware('login');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pasien',[
            'item' => DB::table('pasiens')->paginate(10),
       ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pasien_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'namaLengkap' => 'required',
            'alamat' => 'required|min:5',
            'noHp' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required',
        ]);
        Pasien::create($validatedData); //untuk menyimpan data
        
        // toast('Registration has been successful','success');
        return redirect()->intended('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("pages.pasien_edit",[
            'title' => 'Karyawan - Edit data Pasien',
            'item' => Pasien::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'namaLengkap' => 'required',
            'alamat' => 'required|min:5',
            'noHp' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required',
        ]);

        // Menyimpan update data karyawan
    	$user = Pasien::find($id);
    	$user->namaLengkap = $request->namaLengkap;
        $user->alamat = $request->alamat;
        $user->noHp = $request->noHp;
        $user->jenisKelamin = $request->jenisKelamin;
        $user->tanggalLahir = $request->tanggalLahir;
    	$user->save();
    	
        // toast('Your data has been saved!','success');
    	return redirect("/pasien"); // untuk diarahkan kemana
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::destroy($id);
        return redirect("/pasien"); // untuk diarahkan kemana
    }
}
