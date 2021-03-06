<?php

use App\Http\Controllers\Development\DevelopmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('env.local')->group(function () {
    Route::as('GetRandomUser')->get('get/random/user', [DevelopmentController::class, 'getRandomEmailOfDefaultUsers']);
});

