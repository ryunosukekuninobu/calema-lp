<?php

use Illuminate\Support\Facades\Route;
use Calema\Lp\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Landing Page Routes
|--------------------------------------------------------------------------
|
| Here are the routes for the landing page module.
|
*/

Route::middleware(['web'])->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
});
