<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, '__invoke'])->name('home');

Route::prefix('lfebs')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('index');
    Route::get('{equip}', [HomeController::class, 'show'])->name('show');
});