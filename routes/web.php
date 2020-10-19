<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function() {
    return view('admin.dashboard');
});

Route::get('/kepsek', function() {
    return view('kepsek.dashboard');
});

Route::get('/pengunjung', [App\Http\Controllers\pengunjungcontroller::class, 'index'])->name('pengunjung');
Route::post('/pengunjung/create', [App\Http\Controllers\pengunjungcontroller::class, 'create'])->name('pengunjung');
