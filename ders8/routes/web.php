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

Route::get('/insert', function(){
    DB::insert('INSERT into posts (title,description,content) values (?, ?, ?)', ['Math', 'English', 'Algorithms']);
});


Route::get('/select', function(){
    $posts = DB::select('SELECT * from posts');
    return $posts;
});

Route::get('/update', function(){
    $updated = DB::update('UPDATE posts set title = ? where id = ?', ['Science', 1]);
    return $updated;
});

Route::get('/delete', function(){
    $deleted = DB::delete('DELETE from posts where id = ?', [5]);
    return $deleted;
});