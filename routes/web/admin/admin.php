<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;


Route::prefix("admin")->name('admin.')->group(function(){
    Route::get('/login', [HomeController::class, 'adminHome'])->name('login-form');
    Route::post('/login', [HomeController::class, 'adminHome'])->name('login');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
 