<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\ApiV1\FrontApi\Dishes\Controllers\PromotionsController::class)->group(function () {
        Route::post('/promotions:search', 'search');
        Route::get('/promotions/{id}', 'get');
    });

