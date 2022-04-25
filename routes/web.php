<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginDokterController;

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
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/daftar', [App\Http\Controllers\RegisterController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [App\Http\Controllers\RegisterController::class, 'simpan']);

Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->middleware('auth');

Route::get('/bg', function () {
    return view('template/background');
});

Route::get('/aktor', function () {
    return view('aktor');
});

Route::get('/suksesdaftar', function () {
    return view('suksesdaftar');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/logindokter', function () {
    return view('logindokter');
});

Route::get('/jadwaldokter', function () {
    return view('jadwaldokter');
});