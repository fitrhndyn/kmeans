<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\HasilController;

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
Route::get('/',[HomeController::class,'login'])->name('landing');
Route::get('/halamanutama',[HomeController::class,'index'])->name('halamanutama');

//Route Login
Route::post('/login/dosen', [ProfilController::class, 'login_dosen'])->name('login_dosen');
Route::post('/login/mahasiswa', [ProfilController::class, 'login_mahasiswa'])->name('login_mahasiswa');

Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa');
Route::get('/mahasiswa/tambah',[MahasiswaController::class,'tambah']);
Route::post('/mahasiswa/tambahkan',[MahasiswaController::class,'tambahkan']);
Route::post('/mahasiswa/perbaharui',[MahasiswaController::class,'perbaharui']);
Route::get('/mahasiswa/ubah/{id_mahasiswa}',[MahasiswaController::class,'ubah']);
Route::post('/mahasiswa/perbaharui/{id_mahasiswa}',[MahasiswaController::class,'perbaharui']);
Route::get('/mahasiswa/hapus/{id_mahasiswa}',[MahasiswaController::class,'hapus']);


Route::post('/kuesioner/hasil_kuesioner', [KuesionerController::class, 'isi_kuesioner']);
// Route::get('/profil',[ProfilController::class,'index']);
Route::get('/profil',[ProfilController::class,'index'])->name('profil');
Route::get('/profil/detail/{id_profil}',[ProfilController::class,'detail']);
Route::get('/profil/tambah',[ProfilController::class,'tambah']);
Route::post('/profil/tambahkan',[ProfilController::class,'tambahkan']);
Route::post('/profil/perbaharui',[ProfilController::class,'perbaharui']);
Route::get('/profil/ubah/{id_profil}',[ProfilController::class,'ubah']);
Route::post('/profil/perbaharui/{id_profil}',[ProfilController::class,'perbaharui']);
Route::get('/profil/hapus/{id_profil}',[ProfilController::class,'hapus']);


Route::get('/kuesioner',[KuesionerController::class,'index'])->name('kuesioner');
Route::get('/perhitungan',[PerhitunganController::class,'index']);
Route::get('/hasil',[HasilController::class,'index']);
Route::post('hitung', [PerhitunganController::class, 'hitung'])->name('hitung');
Route::get('/logout',[ProfilController::class, 'logout'])->name('logout');



