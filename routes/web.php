<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasien;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\RefPoliBagianController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\RefTindakanController;

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

Route::get('/perawat', [App\Http\Controllers\PerawatController::class, 'index'])->name('perawat');
Route::get('/create_perawat', [App\Http\Controllers\PerawatController::class, 'create'])->name('create_perawat');
Route::post('/simpan_perawat', [App\Http\Controllers\PerawatController::class, 'store'])->name('simpan_perawat');

Route::get('/ref_poli_bagian', [App\Http\Controllers\RefPoliBagianController::class, 'index'])->name('ref_poli_bagian');
Route::get('/create_ref_poli_bagian', [App\Http\Controllers\RefPoliBagianController::class, 'create'])->name('create_ref_poli_bagian');
Route::post('/simpan_ref_poli_bagian', [App\Http\Controllers\RefPoliBagianController::class, 'store'])->name('simpan_ref_poli_bagian');

Route::get('/tindakan', [App\Http\Controllers\TindakanController::class, 'index'])->name('tindakan');
Route::get('/create_tindakan', [App\Http\Controllers\TindakanController::class, 'create'])->name('create_tindakan');
Route::post('/simpan_tindakan', [App\Http\Controllers\TindakanController::class, 'store'])->name('simpan_tindakan');

Route::get('/ref_tindakan', [App\Http\Controllers\RefTindakanController::class, 'index'])->name('ref_tindakan');
Route::get('/create_ref_tindakan', [App\Http\Controllers\RefTindakanController::class, 'create'])->name('create_ref_tindakan');
Route::post('/simpan_ref_tindakan', [App\Http\Controllers\RefTindakanController::class, 'store'])->name('simpan_ref_tindakan');