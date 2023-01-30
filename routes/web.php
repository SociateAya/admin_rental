<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CarController;

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

// routing frontend
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('homepage');
Route::get('/detail',[\App\Http\Controllers\HomeController::class,'detail'])->name('detail');



// routing admin
Route::get('admin/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard.index')->middleware('is_admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
