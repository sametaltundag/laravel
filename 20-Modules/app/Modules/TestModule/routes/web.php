<?php

use App\Modules\TestModule\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;


Route::prefix('test')->group(function () {
   Route::get('/', [ModuleController::class, 'index'])->name('test.index');
   Route::get('/create', [ModuleController::class, 'create'])->name('test.create');
   Route::post('/store', [ModuleController::class, 'store'])->name('test.store');
   Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('test.edit');
   Route::post('/update/{id}', [ModuleController::class, 'update'])->name('test.update');
   Route::delete('/destroy/{id}', [ModuleController::class, 'destroy'])->name('test.destroy');
});
