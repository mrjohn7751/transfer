<?php

use App\Http\Controllers\TtjController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [TtjController::class, 'index'])->name('show');
Route::get('/', [TtjController::class, 'home'])->name('home');

Route::get('/download/{id}', [TtjController::class, 'downloadFile'])->name('ttj.download');

Route::resource('ttj', TtjController::class);


Route::get('/result', function () {
    // You can pass data to the view using an associative array
    $data = [
        'title' => 'Sample Page',
        'content' => 'This is the content of the sample page.',
    ];

    // Render the blade.php view with the data
    return view('result', $data);
})->name('result');
