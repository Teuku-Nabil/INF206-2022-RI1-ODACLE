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

/**Route::get('/login', function () {
    return view('login');
});*/
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [App\Http\Controllers\LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/daftar', function () {
    return view('daftar');
});

Route::post('/daftar', [App\Http\Controllers\DaftarController::class, 'store']);

Route::get('/bg', function () {
    return view('template/background');
});
