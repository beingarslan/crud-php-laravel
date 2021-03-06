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
    return view('pages/home');
});
Route::get('/creat/wine', function () {
    return view('pages/create-wine');
});

Route::post('/store', [App\Http\Controllers\WineController::class, 'store'])->name('store');
Route::get('/wines-list', [App\Http\Controllers\WineController::class, 'index'])->name('wines-list');
Route::get('/edit/{id}', [App\Http\Controllers\WineController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\WineController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\WineController::class, 'delete'])->name('delete');