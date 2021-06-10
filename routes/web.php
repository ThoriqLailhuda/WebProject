<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasien;


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

Route::get('/antrian', [FrontController::class, 'antrian']);

Route::get('/home_admin', [FrontController::class, 'home_admin'])->name('home_admin');

Route::post('/simpan_pasien', [pasien::class, 'store']);

Route::post('/simpan_reservasi', [FrontController::class, 'simpan_reservasi']);

Route::get('/menu', [FrontController::class, 'menu']);

Route::get('/antrian', [FrontController::class, 'antrian']);

Route::get('/daftarpasien', [FrontController::class, 'daftarpasien']);

Route::get('/edit_pasien/{id}', [FrontController::class, 'editpasien']);

Route::post('/update_pasien', [FrontController::class, 'Update_pasien']);

Route::get('/delete_pasien/{id}', [FrontController::class, 'deletepasien']);

Route::get('/reservasi_pasien', [FrontController::class, 'reservasipasien']);

Route::get('/dokter', [FrontController::class, 'dokter']);

Route::get('/perawat', [FrontController::class, 'perawat']);

Route::get('/ref_poli_bagian', [FrontController::class, 'ref_poli_bagian']);

Route::get('/kunjungan', [FrontController::class, 'kunjungan']);

Route::get('/kunjungan_poli', [FrontController::class, 'kunjungan_poli']);

Route::get('/tindakan', [FrontController::class, 'tindakan']);

Route::get('/bhp', [FrontController::class, 'bhp']);

Route::get('/tambahdata_admin', [FrontController::class, 'tambahdata_admin']);

Route::get('/obat', [FrontController::class, 'obat']);

Route::get('/ref_tindakan', [FrontController::class, 'ref_tindakan']);

Route::get('/ref_obat', [FrontController::class, 'ref_obat']);

Route::get('/ref_penyakit_icd', [FrontController::class, 'ref_penyakit_icd']);

Route::get('/ref_bhp', [FrontController::class, 'ref_bhp']);

Route::get('/get_kabupaten/{id}', [FrontController::class, 'getkabupaten']);

Route::get('/get_kecamatan/{id}', [FrontController::class, 'getkecamatan']);

Route::get('/get_kelurahan/{id}', [FrontController::class, 'getkelurahan']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

