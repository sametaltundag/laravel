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


    // Aggregate işlemleri
    
    $users = DB::table('users')->count(); // tablodaki veri sayısını döner.

    $users = DB::table('users')->max('point'); //tabloda en büyük point degerine sahip veriyi döner.
    $users = DB::table('users')->min('point'); //tabloda en kuçük point degerine sahip veriyi döner.
    $users = DB::table('users')->avg('point'); //tabloda point degerlerinin ortalamasını döner.
    $users = DB::table('users')->sum('point'); //tabloda point degerlerinin toplamını döner.
    
    
    return $users;
});
