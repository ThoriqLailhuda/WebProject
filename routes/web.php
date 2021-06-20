<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasien;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\RefPoliBagianController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\RefTindakanController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\BhpController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RefObatController;
use App\Http\Controllers\RefBhpController;
use App\Http\Controllers\RefPenyakitIcdController;

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

Route::post('/simpan_reservasi_admin', [FrontController::class,'simpan_reservasi_admin']);

Route::post('/simpan_reservasi', [FrontController::class, 'simpan_reservasi']);

Route::post('/simpan_kunjunganpoli', [FrontController::class, 'simpan_kunjungan_poli']);

Route::get('/menu', [FrontController::class, 'menu']);

Route::get('/daftar_kunjungan', [FrontController::class, 'daftar_kunjungan']);
Route::get('/daftar_kunjunganpoli', [FrontController::class, 'daftar_kunjunganpoli']);

Route::get('/daftarpasien', [FrontController::class, 'daftarpasien']);

Route::get('/edit_pasien/{id}', [FrontController::class, 'editpasien']);

Route::post('/update_pasien', [FrontController::class, 'Update_pasien']);

Route::post('/simpan_kunjungan', [FrontController::class, 'simpan_kunjungan']);
Route::post('/simpan_kunjungan_poli', [FrontController::class, 'simpan_kunjungan_poli']);
Route::post('/save_tindakan', [FrontController::class, 'save_tindakan']);
Route::post('/save_obat', [FrontController::class, 'save_obat']);

Route::get('/delete_pasien/{id}', [FrontController::class, 'deletepasien']);

Route::get('/reservasi_pasien', [FrontController::class, 'reservasipasien']);
Route::get('/daftar_tindakan', [FrontController::class, 'daftar_tindakan']);

Route::get('/reservasi_admin', [FrontController::class, 'reservasiadmin']);

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

Route::get('/searchpenyakit/{id}', [FrontController::class, 'searchpenyakit']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perawat', [App\Http\Controllers\PerawatController::class, 'index'])->name('perawat');
Route::get('/create_perawat', [App\Http\Controllers\PerawatController::class, 'create'])->name('create_perawat');
Route::post('/simpan_perawat', [App\Http\Controllers\PerawatController::class, 'store'])->name('simpan_perawat');
Route::get('/edit_perawat/{id}', [App\Http\Controllers\PerawatController::class, 'edit'])->name('edit_perawat');
Route::post('/update_perawat/{id}', [App\Http\Controllers\PerawatController::class, 'update'])->name('update_perawat');
Route::get('/delete_perawat/{id}', [App\Http\Controllers\PerawatController::class, 'destroy'])->name('delete_perawat');

Route::get('/ref_poli_bagian', [App\Http\Controllers\RefPoliBagianController::class, 'index'])->name('ref_poli_bagian');
Route::get('/create_ref_poli_bagian', [App\Http\Controllers\RefPoliBagianController::class, 'create'])->name('create_ref_poli_bagian');
Route::post('/simpan_ref_poli_bagian', [App\Http\Controllers\RefPoliBagianController::class, 'store'])->name('simpan_ref_poli_bagian');
Route::get('/edit_ref_poli_bagian/{id}', [App\Http\Controllers\RefPoliBagianController::class, 'edit'])->name('edit_ref_poli_bagian');
Route::post('/update_ref_poli_bagian/{id}', [App\Http\Controllers\RefPoliBagianController::class, 'update'])->name('update_ref_poli_bagian');
Route::get('/delete_ref_poli_bagian/{id}', [App\Http\Controllers\RefPoliBagianController::class, 'destroy'])->name('delete_ref_poli_bagian');

Route::get('/tindakan', [App\Http\Controllers\TindakanController::class, 'index'])->name('tindakan');
Route::get('/create_tindakan', [App\Http\Controllers\TindakanController::class, 'create'])->name('create_tindakan');
Route::post('/simpan_tindakan', [App\Http\Controllers\TindakanController::class, 'store'])->name('simpan_tindakan');
Route::get('/edit_tindakan/{id}', [App\Http\Controllers\TindakanController::class, 'edit'])->name('edit_tindakan');
Route::post('/update_tindakan/{id}', [App\Http\Controllers\TindakanController::class, 'update'])->name('update_tindakan');
Route::get('/delete_tindakan/{id}', [App\Http\Controllers\TindakanController::class, 'destroy'])->name('delete_tindakan');

Route::get('/ref_tindakan', [App\Http\Controllers\RefTindakanController::class, 'index'])->name('ref_tindakan');
Route::get('/create_ref_tindakan', [App\Http\Controllers\RefTindakanController::class, 'create'])->name('create_ref_tindakan');
Route::post('/simpan_ref_tindakan', [App\Http\Controllers\RefTindakanController::class, 'store'])->name('simpan_ref_tindakan');
Route::get('/edit_ref_tindakan/{id}', [App\Http\Controllers\RefTindakanController::class, 'edit'])->name('edit_ref_tindakan');
Route::post('/update_ref_tindakan/{id}', [App\Http\Controllers\RefTindakanController::class, 'update'])->name('update_ref_tindakan');
Route::get('/delete_ref_tindakan/{id}', [App\Http\Controllers\RefTindakanController::class, 'destroy'])->name('delete_ref_tindakan');

Route::get('/dokter', [App\Http\Controllers\DokterController::class, 'index'])->name('dokter');
Route::get('/create_dokter', [App\Http\Controllers\DokterController::class, 'create'])->name('create_dokter');
Route::post('/simpan_dokter', [App\Http\Controllers\DokterController::class, 'store'])->name('simpan_dokter');
Route::get('/edit_dokter/{id}', [App\Http\Controllers\DokterController::class, 'edit'])->name('edit_dokter');
Route::post('/update_dokter/{id}', [App\Http\Controllers\DokterController::class, 'update'])->name('update_dokter');
Route::get('/delete_dokter/{id}', [App\Http\Controllers\DokterController::class, 'destroy'])->name('delete_dokter');

Route::get('/bhp', [App\Http\Controllers\BhpController::class, 'index'])->name('bhp');
Route::get('/create_bhp', [App\Http\Controllers\BhpController::class, 'create'])->name('create_bhp');
Route::post('/simpan_bhp', [App\Http\Controllers\BhpController::class, 'store'])->name('simpan_bhp');
Route::get('/edit_bhp/{id}', [App\Http\Controllers\BhpController::class, 'edit'])->name('edit_bhp');
Route::post('/update_bhp/{id}', [App\Http\Controllers\BhpController::class, 'update'])->name('update_bhp');
Route::get('/delete_bhp/{id}', [App\Http\Controllers\BhpController::class, 'destroy'])->name('delete_bhp');

Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index'])->name('obat');
Route::get('/create_obat', [App\Http\Controllers\ObatController::class, 'create'])->name('create_obat');
Route::post('/simpan_obat', [App\Http\Controllers\ObatController::class, 'store'])->name('simpan_obat');
Route::get('/edit_obat/{id}', [App\Http\Controllers\ObatController::class, 'edit'])->name('edit_obat');
Route::post('/update_obat/{id}', [App\Http\Controllers\ObatController::class, 'update'])->name('update_obat');
Route::get('/delete_obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy'])->name('delete_obat');

Route::get('/ref_obat', [App\Http\Controllers\RefObatController::class, 'index'])->name('ref_obat');
Route::get('/create_ref_obat', [App\Http\Controllers\RefObatController::class, 'create'])->name('create_ref_obat');
Route::post('/simpan_ref_obat', [App\Http\Controllers\RefObatController::class, 'store'])->name('simpan_ref_obat');
Route::get('/edit_ref_obat/{id}', [App\Http\Controllers\RefObatController::class, 'edit'])->name('edit_ref_obat');
Route::post('/update_ref_obat/{id}', [App\Http\Controllers\RefObatController::class, 'update'])->name('update_ref_obat');
Route::get('/delete_ref_obat/{id}', [App\Http\Controllers\RefObatController::class, 'destroy'])->name('delete_ref_obat');

Route::get('/ref_bhp', [App\Http\Controllers\RefBhpController::class, 'index'])->name('ref_bhp');
Route::get('/create_ref_bhp', [App\Http\Controllers\RefBhpController::class, 'create'])->name('create_ref_bhp');
Route::post('/simpan_ref_bhp', [App\Http\Controllers\RefBhpController::class, 'store'])->name('simpan_ref_bhp');
Route::get('/edit_ref_bhp/{id}', [App\Http\Controllers\RefBhpController::class, 'edit'])->name('edit_ref_bhp');
Route::post('/update_ref_bhp/{id}', [App\Http\Controllers\RefBhpController::class, 'update'])->name('update_ref_bhp');
Route::get('/delete_ref_bhp/{id}', [App\Http\Controllers\RefBhpController::class, 'destroy'])->name('delete_ref_bhp');

Route::get('/ref_penyakit_icd', [App\Http\Controllers\RefPenyakitIcdController::class, 'index'])->name('ref_penyakit_icd');
Route::get('/create_ref_penyakit_icd', [App\Http\Controllers\RefPenyakitIcdController::class, 'create'])->name('create_ref_penyakit_icd');
Route::post('/simpan_ref_penyakit_icd', [App\Http\Controllers\RefPenyakitIcdController::class, 'store'])->name('simpan_ref_penyakit_icd');
Route::get('/edit_ref_penyakit_icd/{id}', [App\Http\Controllers\RefPenyakitIcdController::class, 'edit'])->name('edit_ref_penyakit_icd');
Route::post('/update_ref_penyakit_icd/{id}', [App\Http\Controllers\RefPenyakitIcdController::class, 'update'])->name('update_ref_penyakit_icd');
Route::get('/delete_ref_penyakit_icd/{id}', [App\Http\Controllers\RefPenyakitIcdController::class, 'destroy'])->name('delete_ref_penyakit_icd');