<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/praktik1', function () {
    return view('praktik1');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2>Hello $nama dari $alamat</h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});

Route::get('/pasien', function () {
    return view('pasien/pasien');
});

use App\Http\Controllers\UserController;

Route::get('/user', 
    [UserController::class, 'index']);

Route::get('/user/daftar', 
    [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');

use App\Http\Controllers\PasienController;

Route::post('/pasien/sukses', 
    [PasienController::class, 'sukses'])->name('pasien/sukses');

