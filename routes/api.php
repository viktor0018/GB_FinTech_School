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

Route::get("/test","TestController@index");

Route::get("/auth","TestController@auth")->middleware('auth:api');

Route::get('/question', "QuestionController@index");

Route::post('register','Api\UsersController@register');

Route::get('login','Api\UsersController@login');

Route::get('path_to_login', ['as' => 'login', 'uses' => 'Api\UsersController@login']);

Route::get('/chapter', "ChapterController@index")->middleware('auth:api');

Route::get('/question/random/{id}', "QuestionController@questionRandom")->middleware('auth:api');

Route::post('/question/answer', "QuestionController@questionAnswer")->middleware('auth:api');


Route::get('/search', "QuestionController@search")->middleware('auth:api');


