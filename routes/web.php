<?php

use Illuminate\Support\Facades\Route;

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

//Landing Page
Route::get('/', function () {
    return view('halamanawal');
});

//Login Page
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'actionlogin']);

//Register Page
Route::get('/daftar', [App\Http\Controllers\RegisterController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [App\Http\Controllers\RegisterController::class, 'simpan']);

//Auth Group :  Pasien
Route::group(['middleware' => ['auth', 'ceklevel:pasien']], function(){
    Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logoutpasien']);
    Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'index'])->name('profil.index');
    Route::get('/updateprofil', [App\Http\Controllers\ProfileController::class, 'edit']);
    Route::patch('/profil', [App\Http\Controllers\ProfileController::class, 'update'])->name('profil.update');
    Route::get('/updatefoto', [App\Http\Controllers\ProfileController::class, 'foto']);
    Route::post('/profil', [App\Http\Controllers\ProfileController::class, 'upload'])->name('foto.upload');
    Route::get('/riwayat', [App\Http\Controllers\BerandaController::class, 'riwayat']);
    Route::get('/pilih-spesialis', [App\Http\Controllers\BerandaController::class, 'regis']);
    Route::get('/gigi-anak', [App\Http\Controllers\BerandaController::class, 'gigi']);
    Route::get('/ortodonsia', [App\Http\Controllers\BerandaController::class, 'ortodonsia']);
    Route::get('/periodonsia', [App\Http\Controllers\BerandaController::class, 'periodonsia']);
    Route::get('/radiologi-gigi', [App\Http\Controllers\BerandaController::class, 'radiologi']);
    Route::post('/regis', [App\Http\Controllers\BerandaController::class, 'regispasien']);
    Route::get('/antrian', [App\Http\Controllers\BerandaController::class, 'antrian']);
    Route::get('/jadwal', [App\Http\Controllers\BerandaController::class, 'jadwal']);
});

//Auth Group : Dokter 
Route::group(['middleware' => ['auth', 'ceklevel:dokter']], function(){
    Route::get('/beranda-dokter', [App\Http\Controllers\BerandaController::class, 'berandadokter']);
    Route::get('/logout-dokter', [App\Http\Controllers\LoginController::class, 'logoutdokter']);
    Route::get('/profil-dokter', [App\Http\Controllers\ProfileController::class, 'profildokter'])->name('profil.dokter');
    Route::get('/updateprofil-dokter', [App\Http\Controllers\ProfileController::class, 'ubah']);
    Route::patch('/profil-dokter', [App\Http\Controllers\ProfileController::class, 'updatedokter'])->name('profil.updatedokter');
    Route::get('/updatefoto-dokter', [App\Http\Controllers\ProfileController::class, 'fotodokter']);
    Route::post('/profil-dokter', [App\Http\Controllers\ProfileController::class, 'uploaddokter'])->name('fotodokter.upload');
    Route::get('/jadwal-praktik', [App\Http\Controllers\BerandaController::class, 'jadwalpraktik']);
});