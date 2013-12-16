<?php namespace App\Controllers;

use Auth, View, Input, Redirect, Validator;

class Session extends Controller {

	public function create()
	{
		return View::make('session.create');
	}

	public function store()
	{
		$credentials = array
		(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
		);

		if (strpos($credentials['username'], '@'))
		{
			$credentials['email'] = $credentials['username'];
			unset($credentials['username']);
		}

		if (Auth::attempt($credentials, Input::get('remember', false)))
		{
			return Redirect::intended('/')
				->withFlashMessage('Welcome back!');
		}
		else
		{
			return Redirect::back()
				->withError('Invalid credentials!');
		}
	}

	public function destroy()
	{
		Auth::logout();

		return Redirect::home()
			->withFlashMessage('You have been logged out!');
	}

}
