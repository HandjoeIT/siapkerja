<?php

use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('lokasi-datang', [PresensiController::class, 'lokasi'])->name('lokasi');


Route::middleware(['auth'])->group(function(){
    route::prefix('presensi')->name('presensi')->group(function(){
        Route::resource('presensi', PresensiController::class);
        Route::get('datang', [PresensiController::class, 'createDatang'])->name('datang');
        Route::get('user', [PresensiController::class, 'data'])->name('user');
        Route::get('istirahat/{id}', [PresensiController::class, 'istirahat'])->name('istirahat');
        Route::post('istirahat-update/{presensi}', [PresensiController::class, 'updateIstirahat'])->name('istirahat.update');
        Route::get('kembali/{id}', [PresensiController::class, 'back'])->name('kembali');
        Route::post('kembali-update/{presensi}', [PresensiController::class, 'updateBack'])->name('kembali.update');
        Route::get('pulang/{id}', [PresensiController::class, 'checkout'])->name('pulang');
        Route::post('pulang-update/{presensi}', [PresensiController::class, 'updateCheckout'])->name('pulang.update');
    });
});