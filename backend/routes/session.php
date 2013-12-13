<?php

Route::get('login', array
(
	'as' => 'session.create',
	'before' => 'guest',
	'uses' => 'App\Controllers\SessionController@create',
));

Route::post('login', array
(
	'as' => 'session.store',
	'before' => 'guest',
	'uses' => 'App\Controllers\SessionController@store',
));

Route::get('logout', array
(
	'as' => 'session.destroy',
	'uses' => 'App\Controllers\SessionController@destroy',
));