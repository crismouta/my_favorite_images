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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/images', [MyImageController::class, 'store'])->name('store')->middleware('auth');
Route::put('/images/{id}', [MyImageController::class, 'update'])->name('update')->middleware('auth');


