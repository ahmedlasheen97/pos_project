<?php

use App\Http\Controllers\Dashboard\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
