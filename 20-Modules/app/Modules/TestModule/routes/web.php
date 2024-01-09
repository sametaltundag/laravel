<?php

use App\Modules\TestModule\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;


Route::prefix('test')->group(function () {
   Route::get('/', [ModuleController::class, 'index'])->name('test.index');
   Route::get('/create', [ModuleController::class, 'create'])->name('test.create');
   Route::post('/store', [ModuleController::class, 'store'])->name('test.store');

});
