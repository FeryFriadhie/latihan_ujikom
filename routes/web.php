<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KonsumenController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function() {
    return view('index');
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// KONSUMEN 
// method di route berpengaruh ke form
Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen.index');
Route::get('/konsumen/create', [KonsumenController::class, 'create'])->name('konsumen.create');
Route::post('/konsumen/store', [KonsumenController::class, 'store'])->name('konsumen.store');
Route::get('/konsumen/edit/{user}', [KonsumenController::class, 'edit'])->name('konsumen.edit');
Route::patch('/konsumen/update/{user}', [KonsumenController::class, 'update'])->name('konsumen.update');
Route::delete('/konsumen/destroy/{user}', [KonsumenController::class, 'destroy'])->name('konsumen.destroy');

// KARYAWAN
Route::get ('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/edit/{user}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::patch('/karyawan/update{user}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/destroy/{user}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');