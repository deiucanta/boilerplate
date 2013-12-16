<?php

Route::get('/', array
(
	'as' => 'home',
	'uses' => 'App\Controllers\Home@showWelcome',
));

require 'routes/session.php';
