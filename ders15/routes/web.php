<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
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

Route::get('/', [UploadController::class,'index'])->name('form');
Route::post('/single-upload', [UploadController::class,'singleFileUpload'])->name('single-upload');
Route::post('/multi-upload', [UploadController::class,'multiFileUpload'])->name('multi-upload');
Route::post('/crop-upload', [UploadController::class,'cropFileUpload'])->name('crop-upload');