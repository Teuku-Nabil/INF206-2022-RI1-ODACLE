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

Route::get('/', function () {
    return view('halamanawal');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'actionlogin']);

Route::get('/daftar', [App\Http\Controllers\RegisterController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [App\Http\Controllers\RegisterController::class, 'simpan']);


Route::group(['middleware' => ['auth', 'ceklevel:pasien']], function(){
    Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logoutpasien']);
    Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'index'])->name('profil.index');
    Route::get('/updateprofil', [App\Http\Controllers\ProfileController::class, 'edit']);
    Route::patch('/profil', [App\Http\Controllers\ProfileController::class, 'update'])->name('profil.update');
    Route::get('/updatefoto', [App\Http\Controllers\ProfileController::class, 'foto']);
    Route::post('/profil', [App\Http\Controllers\ProfileController::class, 'upload'])->name('foto.upload');
});

Route::group(['middleware' => ['auth', 'ceklevel:dokter']], function(){
    Route::get('/beranda-dokter', [App\Http\Controllers\BerandaController::class, 'berandadokter']);
    Route::get('/logout-dokter', [App\Http\Controllers\LoginController::class, 'logoutdokter']);
});

Route::get('/bg', function () {
    return view('template/background');
});


// dokter
Route::get('/jadwal-saya', function () {
    return view('dokter/jadwal-saya');
});

Route::get('/antrian', function () {
    return view('user/antrian');
});

Route::get('/pilih-spesialis', function () {
    return view('user/pilih-spesialis');
});

Route::get('/data-dokter', function () {
    return view('dokter/data-dokter');
});
