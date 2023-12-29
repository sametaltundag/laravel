<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CustomAuthMiddleware;

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


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-auth', [UserController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware([CustomAuthMiddleware::class])->prefix('user')->group(function(){
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});
