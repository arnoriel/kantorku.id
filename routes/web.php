<?php
  
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JadwalController;
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
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
Route::get('/karyawan', function () {
    return view('karyawan.index');
});
Route::get('/jadwala', function () {
    return view('jadwala.index');
});
Route::resource('/karyawan', KaryawanController::class);
Route::get('/jadwala', [App\Http\Controllers\JadwalController::class, 'indexa']);
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:anggota'])->group(function () {
  
    Route::get('/anggota/home', [HomeController::class, 'anggotaHome'])->name('anggota.home');
});
Route::get('/jadwal', function () {
    return view('jadwal.create');
});
Route::resource('/jadwal', JadwalController::class);