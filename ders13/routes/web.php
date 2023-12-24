<?php

use Illuminate\Support\Facades\DB;
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
    // normal veri çekme
    $users = DB::table('users')->get();

    // pluck ile sütun çekme
    $users = DB::table('users')->pluck('name');

    // where ile değer çekme
    $users = DB::table('users')->where('name', 'samet')->value('email');
    // value fonksyionu eşleşen ilk veriyi çeker

    // first ile ilk veriyi çekme
    $users = DB::table('users')->first();

    // first + where ile ilk veriyi çekme
    $users = DB::table('users')->where('name', 'kübra')->first();

    // find ile veri bulma ve değer getirme
    // 1. yöntem
    $users = DB::table('users')->find(1);

    // 2. yöntem
    $id = 1;
    $users = DB::table('users')->find($id);

    return $users;
});
