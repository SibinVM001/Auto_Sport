<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateDistrictCityController;


Route::get('/state', [StateDistrictCityController::class, 'index'])->name('state');

Route::get('/district/{id}', [StateDistrictCityController::class, 'district'])->name('district');

Route::get('/city/{id}', [StateDistrictCityController::class, 'city'])->name('city');
 