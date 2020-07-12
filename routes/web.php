<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/image-gallery', function () {
    return view('gallery.image-gallery');
})->name('image-gallery');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/paintings', 'PaintingsController@index')->name('paintings');
    Route::get('/paintings/create', 'PaintingsController@create')->name('add.painting');
    Route::get('/paintings/{painting}', 'PaintingsController@show')->name('show.painting');
    Route::post('/paintings', 'PaintingsController@store')->name('store.painting');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
