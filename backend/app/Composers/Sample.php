<?php namespace App\Composers;

class Sample extends Composer {

	public function test($view)
	{
		$view->with('a', 'b');
	}

}
