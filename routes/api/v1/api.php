<?php

use Laravel\Sanctum\Http\Controllers\CsrfCookieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

require base_path('routes/api/v1/category-dishes.php');
require base_path('routes/api/v1/dishes.php');
require base_path('routes/api/v1/promotions.php');

// a/csrf-cookie
Route::get(
    '/csrf-cookie',
    CsrfCookieController::class.'@show'
)->middleware('web')->name('sanctum.csrf-cookie');
