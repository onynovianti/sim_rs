<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\PasienController;

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
Route::resource('/pasien', PasienController::class);
Route::post('/auth',[AuthController::class,'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit');
Route::get('/add_sakit', [PenyakitController::class, 'add']);
Route::post('get_medical_api/{id}',[ApiController::class,'callApi']);