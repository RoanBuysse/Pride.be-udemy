<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    
});


Route::get('/news', 'NewsController@indexApi');
Route::get('/news_categories', 'NewsCategoryController@indexApi');
Route::get('/events_categories', 'EventsCategoryController@indexApi');
Route::get('/events', 'EventsController@indexApi');
Route::get('/organisations', 'OrganisationController@indexApi');


     

   
