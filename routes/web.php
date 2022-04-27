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

Route::get('/aktor', function () {
    return view('aktor');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'actionlogin']);
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/daftar', [App\Http\Controllers\RegisterController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [App\Http\Controllers\RegisterController::class, 'simpan']);

Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->middleware('auth');

Route::get('/bg', function () {
    return view('template/background');
});


// dokter
Route::get('/jadwal-saya', function () {
    return view('dokter/jadwal-saya');
});

Route::get('/beranda-dokter', function () {
    return view('dokter/beranda');
});

Route::get('/profil', function () {
    return view('aktor');
});

