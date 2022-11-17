<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KaryawanController;

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

Route::resource('/auth', AuthController::class);

Route::resource('/admin', AdminController::class);

Route::resource('/dokter', DokterController::class);


Route::get('/admin_add', function () {
    return view('pages/admin_add');
});

Route::get('/admin_edit', function () {
    return view('pages/admin_edit');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

// karyawan
Route::resource('/karyawan', KaryawanController::class);
Route::get('/karyawan_add', function () {
    return view('pages/karyawan_add');
});

Route::get('/karyawan_edit', function () {
    return view('pages/karyawan_edit');
});

Route::get('get_medical_api/{id}',[ApiController::class,'callApi']);
