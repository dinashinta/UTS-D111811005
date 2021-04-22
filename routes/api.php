<?php

use Illuminate\Http\Request;
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

Route::resource('/d111811005_news',D111811005_newsController::class);

Route::resource('/d111811005_admin',D111811005_adminController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
