<?php

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
//comment routes
Route::get('/paintings/{painting}/comments', 'CommentController@index');

Route::middleware('auth:api')->group(function () {
    Route::post('/paintings/{painting}/comment', 'CommentController@store');
});
