<?php namespace App\Validators;

abstract class Validator {

	protected $validator;

	public function validate($input)
	{
		$this->validator = Validator::make($input, static::$rules);

		return $this->validator->passes();
	}

	public function errors()
	{
		return $this->validator->messages();
	}

}
