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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        View::share('news', App\News::all());
        View::share('events', App\Events::all());
        View::share('user', App\User::all());
        Route::get('/', function () {
            return view('welcome');
        });
        //login/register
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
        // news
        Route::get('/news', function () {
                    return view('news/index');});
        Route::get('/news/create', 'NewsController@create')->name('news');
        Route::post('/news/store', 'NewsController@store')->name('news');
        Route::get('/news/{id}', 'NewsController@show')->name('news');
        Route::get('/news/{id}/edit', 'NewsController@edit')->name('news');
        Route::patch('/news/{id}/edit', 'NewsController@update')->name('news');
        Route::delete('/news/{id}', 'NewsController@destroy')->name('news');
        // events
        Route::get('/events', 'EventsController@index')->name('events');
        Route::get('/events/create', 'EventsController@create')->name('events');
        Route::post('/events/store', 'EventsController@store')->name('events');
        Route::get('/events/{id}', 'EventsController@show')->name('events');
        Route::get('/events/{id}/like', 'EventsController@like')->name('events');
        Route::get('/events/{id}/edit', 'EventsController@edit')->name('events');
        Route::patch('/events/{id}/edit', 'EventsController@update')->name('events');
        Route::delete('/events/{id}', 'EventsController@destroy')->name('events');
        //roles
        Route::get('admin', 'AdminController@index')->name('Admin');
        Route::get('writer', 'WriterController@index')->name('Writer');
        
        //category
        Route::resource('news_categories', 'NewsCategoryController' );
        Route::resource('events_categories', 'EventsCategoryController' );

        //users
        Route::resource('users', 'UserController' );

        //likes
        Route::post('/events/{id}/favourites', 'AgendaController@store')->name('agenda.fav.store');
        Route::get('/agenda', 'AgendaController@index');

    });
    
//test

