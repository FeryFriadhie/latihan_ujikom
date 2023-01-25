<?php

use Illuminate\Support\Facades\Route;
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
    return view('dashboard/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/konsumen', [KonsumenController::class, 'index'])->name('konsumen.index');

Route::delete('/konsumen/destory/{user}',[KonsumenController::class, 'destory'])->name('konsumen');