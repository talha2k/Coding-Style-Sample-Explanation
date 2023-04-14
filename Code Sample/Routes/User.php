<?php

Route::post('/login', 'AuthController@login');
Route::middleware('auth:api')->group(function () {
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::get('/users/{id}', 'UserController@show');
    Route::put('/users/{id}', 'UserController@update');
    Route::delete('/users/{id}', 'UserController@destroy');
    Route::post('/logout', 'AuthController@logout');
});
