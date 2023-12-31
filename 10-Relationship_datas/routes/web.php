<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/createOrder', [CustomerController::class, 'createOrder']);
Route::get('/createPrice', [CustomerController::class, 'createPrice']);

Route::get('/updateCustomer', [CustomerController::class, 'updateCustomer']);

Route::get('/read', [CustomerController::class, 'read']);
Route::get('/delete', [CustomerController::class, 'delete']);