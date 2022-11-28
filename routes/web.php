<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/login');
});

Route::resource('/admin', AdminController::class);
Route::resource('/dokter', DokterController::class);
Route::resource('/apoteker', ApotekerController::class);
Route::resource('/karyawan', KaryawanController::class);
<<<<<<< HEAD
Route::resource('/diagnosa', PenyakitController::class);
=======
Route::resource('/pasien', PasienController::class);
Route::resource('/obat', ObatController::class);
>>>>>>> 31f739096151e0b7154d1f9694b921677ce37769
Route::post('/auth',[AuthController::class,'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit');
Route::get('/diagnosa', [PenyakitController::class, 'index'])->name('diagnosa');
Route::get('/add_sakit', [PenyakitController::class, 'add']);
Route::post('get_medical_api/{id}',[ApiController::class,'callApi']);
<<<<<<< HEAD
=======
// Route::get('get_obat_api',[ObatController::class,'callApi']);
>>>>>>> 31f739096151e0b7154d1f9694b921677ce37769
