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






//Film Front Page
Route::get('/', ['uses' => 'FrontPageController@index', 'as' => 'index']);
Route::get('create', ['uses' => 'FrontPageController@create', 'as' => 'create']);
Route::post('storeFilm', ['uses' => 'FrontPageController@storeFilm', 'as' => 'storeFilm']);
Route::get('show-film/{slug}', 'FrontPageController@showFilm')->name('showFilm');

Route::group(['middleware' => 'auth'], function() {
    Route::post('storeComment', ['uses' => 'FrontPageController@storeComment', 'as' => 'storeComment']);
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



