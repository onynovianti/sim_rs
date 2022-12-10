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
use App\Http\Controllers\TransaksiController;
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

//RESOURCES
Route::resource('/admin', AdminController::class);
Route::resource('/dokter', DokterController::class);
Route::resource('/apoteker', ApotekerController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/diagnosa', DiagnosaController::class);
Route::resource('/pasien', PasienController::class);
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/obat', ObatController::class);
Route::resource('/add_sakit', DiagnosaController::class);

//CREDS
Route::post('/auth',[AuthController::class,'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit');
Route::get('/add_sakit', [PenyakitController::class, 'add']);

//DIAGNOSA
Route::post('/diagnosa/session/{id}', [DiagnosaController::class, 'add']);
Route::post('/featureUpdate/{id}',[DiagnosaController::class,'featureUpdate']);
Route::post('/diagnosa/save',[DiagnosaController::class,'save']);
route::post('/diagnosa/save/{id}',[DiagnosaController::class,'save']);
route::get('/diagnosa/update/{id}',[DiagnosaController::class,'update']);

//TRANSAKSI
Route::put('/verify', [TransaksiController::class, 'verify']);
// Route::get('get_obat_api',[ObatController::class,'callApi']);

// DASHBOARD
Route::get('/getChartPasien/{id}', [DashboardController::class, 'getChartPasien']);
Route::get('/getChartObat/{id}', [DashboardController::class, 'getChartObat']);
Route::get('/getChartTransaksi/{id}', [DashboardController::class, 'getChartTransaksi']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/pdf', [PdfController::class, 'index']);

