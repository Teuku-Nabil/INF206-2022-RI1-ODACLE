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

Route::get('/login-dokter', [App\Http\Controllers\LoginController::class, 'logindokter'])->name('logindokter')->middleware('guest');
Route::post('/login-dokter', [App\Http\Controllers\LoginController::class, 'loginaction']);

Route::get('/daftar', [App\Http\Controllers\RegisterController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [App\Http\Controllers\RegisterController::class, 'simpan']);


Route::group(['middleware' => ['auth', 'ceklevel:pasien']], function(){
    Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logoutpasien']);
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

Route::get('/profil', function () {
    return view('aktor');
});
Route::get('/antrian', function () {
    return view('user/antrian');
});
