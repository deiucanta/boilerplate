<?php namespace App\Controllers;

use View;
use App\Models\User;

class Home extends Controller {

	public function showWelcome()
	{
		new User;

		return View::make('hello');
	}

}