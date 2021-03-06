<?php

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
    return view('home.index');
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/services', 'App\Http\Controllers\PageController@services');
Route::get('/halal', 'App\Http\Controllers\PageController@halal');
Route::get('/gallery', 'App\Http\Controllers\PageController@gallery');
Route::get('/contact', 'App\Http\Controllers\PageController@contact');

Route::get('/events', 'App\Http\Controllers\EventController@index');
Route::get('/event/{id}', 'App\Http\Controllers\EventController@show');