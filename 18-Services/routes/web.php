<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TestController::class,'index'])->name('test');
Route::get('/test/create', [TestController::class,'create'])->name('create');
Route::post('/test/store', [TestController::class,'store'])->name('store');
Route::get('/test/{id}/edit', [TestController::class,'edit'])->name('edit');
Route::post('/test/{id}/update', [TestController::class,'update'])->name('update');
Route::delete('/test/{id}/delete', [TestController::class,'delete'])->name('delete');
