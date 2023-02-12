<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyImageController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [MyImageController::class, 'index'])->name('home')->middleware('auth');
Route::post('/images', [MyImageController::class, 'store'])->name('store')->middleware('auth');
Route::get('/create', [MyImageController::class, 'create'])->name('create')->middleware('auth');
Route::put('/images/{id}', [MyImageController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/delete/{id}', [MyImageController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/edit/{id}', [MyImageController::class, 'edit'])->name('edit')->middleware('auth');


