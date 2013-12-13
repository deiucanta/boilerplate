<?php namespace App\Controllers;

use View;
use App\User;

class HomeController extends BaseController {

	public function showWelcome()
	{
		new User;

		return View::make('hello');
	}

}