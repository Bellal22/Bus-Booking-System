<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/trip/route','TripController@getTripByOriginDestination');
    Route::post('/reserve','TripController@ReserveTrip');
});

Route::get('/route', function (){
   dd('Welcome To The Passengers Routing');
});
