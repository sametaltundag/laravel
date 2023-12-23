<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', [PagesController::class, 'create']);
Route::get('/createNew', [PagesController::class,'createNew']);
Route::get('/read', [PagesController::class,'read']);
Route::get('/readById/{id}', [PagesController::class,'readById']);
Route::get('/updateById/{id}', [PagesController::class,'updateById']);
Route::get('/deleteById/{id}', [PagesController::class,'deleteById']);