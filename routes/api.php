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


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');


Route::apiResource('films', 'FilmController');

Route::get('ratings', 'RatingController@index');
Route::post('films/{film}/ratings', 'RatingController@store');

Route::get('comments', 'CommentController@index');
Route::post('comments/{film}/comments', 'CommentController@store');
