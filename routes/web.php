<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::middleware(Admin::class)->group(function () {
    Route::get('/post','PostController@index');

    Route::get('/post/create','PostController@create');

    Route::get('/post/show/{id}','PostController@show');

    Route::post('/post','PostController@store');

    Route::get('/post/edit/{id}','PostController@edit');

    Route::post('/post/edit/{id}','PostController@update');

    Route::get('/post/delete/{id}','PostController@destroy');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
