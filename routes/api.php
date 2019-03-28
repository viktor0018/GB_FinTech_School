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

Route::get("/auth","TestController@auth")->middleware('auth:api');;


Route::post('register','Api\UsersController@create');


Route::get('/chapter', "ChapterController@index");


Route::get('/topic', "TopicController@index");


Route::get('/question', "QuestionController@index");


Route::get('/answer', "AnswerController@index");
