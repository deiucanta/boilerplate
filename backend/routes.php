<?php

Route::get('/', array
(
	'as' => 'home',
	'uses' => 'App\Controllers\HomeController@showWelcome',
));

require 'routes/session.php';