<?php

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@authenticate');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/password/email', 'Auth\PasswordController@getEmail');
Route::post('auth/password/email', 'Auth\PasswordController@postEmail');

Route::get('auth/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('auth/password/reset', 'Auth\PasswordController@postReset');

Route::get('/', function () {
    return view('home.main');
});


Route::get('/orders', function () {
	return view('dashboard.orders');
});
