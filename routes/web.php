<?php

use App\Models\User;
use App\Models\Karyawan;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\LocationController;
use App\Models\Izin;
use App\Models\Presensi;

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


// make route to LoginController
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

// make post route to register
Route::post('/register', [RegisterController::class, 'store']); 

//Karyawan
Route::get('/karyawan/profil', function () {
    return view('karyawan.profil', [
        'title' => 'Detail Profil',
        'karyawan' => Karyawan::where('email', auth()->user()->email)->first(),
        'active' => ''
    ]);
})->middleware('auth', 'isKaryawan');
Route::get('/karyawan/riwayat-presensi', [KaryawanController::class, 'index'])->middleware('auth', 'isKaryawan');
Route::get('/karyawan/presensi', [PresensiController::class, 'presensiMasuk'])->middleware('auth', 'isKaryawan');
// Route::get('/karyawan/presensi', [PresensiController::class, 'presensiPulang'])->middleware('auth', 'isKaryawan');
Route::post('/karyawan/presensi', [PresensiController::class, 'Masuk'])->middleware('auth', 'isKaryawan');
Route::put('/karyawan/presensi/{presensi}', [PresensiController::class, 'Pulang'])->middleware('auth', 'isKaryawan');
Route::get('/karyawan/pengajuan-izin', [IzinController::class, 'index'])->middleware('auth', 'isKaryawan');
Route::get('/karyawan/pengajuan-izin', [IzinController::class, 'postIzin'])->middleware('auth', 'isKaryawan');


//Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth', 'isAdmin');
Route::get('/admin/tambah-lokasi', [AdminController::class, 'getLokasi'])->middleware('auth', 'isAdmin');
Route::post('/admin/tambah-lokasi', [AdminController::class, 'tambahLokasi'])->middleware('auth', 'isAdmin');
Route::get('/admin/data-izin/', [IzinController::class, 'getIzin'])->middleware('auth', 'isAdmin');
Route::get('/admin/data-izin/{id}', [IzinController::class, 'detailIzin'])->middleware('auth', 'isAdmin');
Route::get('/admin/data-izin/{id}/verified', [IzinController::class, 'verified'])->name('verified')->middleware('auth', 'isAdmin');
Route::get('/admin/data-izin/{id}/unverified', [IzinController::class, 'unverified'])->name('unverified')->middleware('auth', 'isAdmin');
Route::get('/admin/data-user/', [AdminController::class, 'getAllUser'])->middleware('auth', 'isAdmin');