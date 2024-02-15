<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\ApiV1\FrontApi\Dishes\Controllers\DishesController::class)->group(function () {
        Route::post('/dishes:search', 'search');
        Route::get('/dishes/{id}', 'get');
    });

