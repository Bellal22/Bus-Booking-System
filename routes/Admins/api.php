<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/auth/route', function (){
        dd('Welcome To The Admins Auth Routing');
    });
});

Route::get('/route', function (){
   dd('Welcome To The Admins Routing');
});
