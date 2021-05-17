<?php

use App\Http\Controllers\FrontController;
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
    return view('welcome');
});

Route::get('/about', [FrontController::class, 'about']);

Route::post('/simpan_pasien', [FrontController::class, 'simpan_pasien']);

Route::get('/menu', [FrontController::class, 'menu']);

Route::get('/antrian', [FrontController::class, 'reservasi']);

Route::get('/daftarpasien', [FrontController::class, 'daftarpasien']);

Route::get('/edit_pasien/{id}', [FrontController::class, 'editpasien']);

Route::post('/update_pasien', [FrontController::class, 'Update_pasien']);

Route::get('/delete_pasien/{id}', [FrontController::class, 'deletepasien']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

