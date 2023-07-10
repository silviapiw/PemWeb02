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

    use App\Http\Controllers\TokoController;

Route:: prefix('toko')-> group (function(){

Route::get('/', 
    [TokoController::class, 'index']);

Route::get('/men', 
    [TokoController::class, 'men']);

Route::get('/women', 
    [TokoController::class, 'women']);

Route::get('/admin',
    [TokoController::class, 'admin'])->name('produk.admin');
    
    Route::get('create',
    [TokoController::class, 'create'])->name('produk.create');
    
    Route::post('/',
    [TokoController::class, 'store'])->name('produk.store');
    
    Route::get('/{product}/edit',
    [TokoController::class, 'edit'])->name('produk.edit');
    
    Route::put('/{product}',
    [TokoController::class, 'update'])->name('produk.update');
    
    Route::delete('/{product}',
    [TokoController::class, 'destroy'])->name('produk.destroy');    

});
        

