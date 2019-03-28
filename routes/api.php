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


Route::get('/user', "TestApi@index")->middleware('auth:api');


Route::get('/chapter', "ChapterController@index");//->middleware('auth:api');


Route::get('/topic', "TopicController@index");


Route::get('/question', "QuestionController@index");


Route::get('/answer', "AnswerController@index");
