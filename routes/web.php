<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\CartController;
use App\Models\VehicleTypes;
use App\Models\Brands;
use App\Models\Models;


Route::get('/', [NewController::class, 'index']);

Route::get('/details/{brand}/{model}', [NewController::class, 'show'])->name('details');

Route::get('/bookNow/{brand}/{model}')->name('bookNow')->middleware('is_logged_in');

Route::get('/cart/{user_id}', [CartController::class, 'index'])->name('cart');

Route::get('/cart/item/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

Route::get('/home')->name('home')->middleware('is_admin');

// Route::middleware(['is_admin'])->group(function () {
//     Route::get('/home')->name('home');
// });

Auth::routes();

Route::fallback(function () {
    return view('error');
});
