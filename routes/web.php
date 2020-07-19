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
    //Routes for paintings different purposes
    Route::get('/paintings', 'PaintingsController@index')->name('paintings');
    Route::get('/paintings/create', 'PaintingsController@create')->name('add.painting');
    Route::get('/paintings/{painting}', 'PaintingsController@show')->name('show.painting');
    Route::put('/paintings/update', 'PaintingsController@update')->name('update.painting');
    Route::post('/paintings', 'PaintingsController@store')->name('store.painting');

    //Routes for account settings different purposes
    Route::get('/settings', 'UserSettingsController@index')->name('settings');
    Route::patch('/settings/basic', 'UserSettingsController@basicSettingsUpdate')->name('settings.basic');
    Route::put('/settings/email', 'UserSettingsController@emailSettingsUpdate')->name('settings.email');
    Route::put('/settings/password', 'UserSettingsController@passwordSettingsUpdate')->name('settings.password');

    //Routes to see self and others profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/profile/{username}', 'ProfileController@show')->name('user.profile');

    //Routes to see account activities
    Route::get('/activities', 'ActivitiesController@index')->name('activities');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
