<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/', [MenuController::class, 'home'])->name('home');
Route::get('/about', [MenuController::class, 'about'])->name('about');
Route::get('/services', [MenuController::class, 'services'])->name('services');
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');