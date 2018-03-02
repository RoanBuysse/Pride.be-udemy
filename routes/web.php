<?php

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// news
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/create', 'NewsController@create')->name('news');
Route::post('/news/store', 'NewsController@store')->name('news');
Route::get('/news/{id}', 'NewsController@show')->name('news');
// events
Route::get('/events', 'EventsController@index')->name('events');
Route::get('/events/create', 'EventsController@create')->name('events');
Route::post('/events/store', 'EventsController@store')->name('events');
Route::get('/events/{id}', 'EventsController@show')->name('events');


