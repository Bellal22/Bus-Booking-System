<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('/buses','BusController');
    Route::resource('/trips','TripController');
});

Route::get('/stations', [\App\Http\Controllers\Api\StationController::class , 'index']);
