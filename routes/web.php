<?php

use App\Http\Controllers\TtjController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [TtjController::class, 'index'])->name('show');
Route::get('/', [TtjController::class, 'home'])->name('home');
Route::get('/result', [TtjController::class, 'result'])->name('result');

Route::get('/download/{id}', [TtjController::class, 'downloadFile'])->name('ttj.download');

Route::resource('ttj', TtjController::class);
?>