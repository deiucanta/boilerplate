<?php namespace App\Validators;

class Sample extends Validator {

	static $rules = array
	(
		'field1' => 'required|alpha',
		'field2' => 'required|numeric'
	);

}