<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/post','API\PostController@index');

Route::post('/post','API\PostController@store');

Route::get('/post/show/{id}','API\PostController@show');

Route::put('/post/edit/{id}','API\PostController@update');

Route::delete('/post/delete/{id}','API\PostController@destroy');
