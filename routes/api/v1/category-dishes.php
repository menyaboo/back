<?php

use App\Http\ApiV1\FrontApi\Dishes\Controllers\CategoryDishesController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryDishesController::class)->group(function () {
    Route::post('/category-dishes:search', 'search');
    Route::get('/category-dishes/{id}', 'get');
});

