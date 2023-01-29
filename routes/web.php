<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsumenController;

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

Route::get('/index', function() {
    return view('index');
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// KONSUMEN method di route berpengaruh ke form

Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen.index');
Route::delete('/konsumen/destroy/{user}',[KonsumenController::class, 'destroy'])->name('konsumen.destroy');
Route::get('/konsumen/create', [KonsumenController::class, 'create'])->name('konsumen.create');
Route::post('/konsumen/store', [KonsumenController::class, 'store'])->name('konsumen.store');

Route::get('/konsumen/edit/{user}', [KonsumenController::class, 'edit'])->name('konsumen.edit');
Route::patch('/konsumen/update/{user}', [KonsumenController::class, 'update'])->name('konsumen.update');