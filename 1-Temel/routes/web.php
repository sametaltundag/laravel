<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
/*
Route::redirect('/','anasayfa');

Route::get('/', function () {
    return view('anasayfa'); // index kaynağı açılınca view blade == anasayfa olanı açar.
});

Route::get('/referanslar', function() {
    return view('referanslar');
});


Route::redirect('/yonetim', '/'); // yonetim diye get isteği gelirse ana sayfaya yönlendirir.

Route::prefix('profil')->group(function () {
    Route::get('/adres-bilgileri', function () {
        // urunler/bilgisayarlar sayfasi
    });

    Route::get('/kisisel-bilgiler', function () {
        // urunler/bilgisayarlar sayfasi
    });
});

Route::fallback(function () {
    Route::get('/hata', function () {
        return 'Aradığınız sayfa bulunamadı';
    });
});

Route::get('/yonetim', function () {
    return view('yonetim');
})->name('admin'); // route'a admin ismini verdik ve artık admin diye bu route'u kullanabiliriz.
*/

/*
Route::prefix('sayfalar')->group(function () {
    Route::get('/anasayfa', function () {
        return view('anasayfa');
    });
    Route::get('/referanslar', function () {
        return view('referanslar');
    });
    Route::get('/kurumsal', function () {
        return view('kurumsal');
    });
});

Route::fallback(function () { // Site adresleri dışında bir adres girilirse çalışır.
    return 'Aradığınız sayfa bulunamadı';
});
*/

Route::resource('users', UsersController::class); // Ayrı bir controller da tüm işlemleri özel olarak yapmaya ve burda temiz kod olmasını sağlar.