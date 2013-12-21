<?php namespace App\Validators;

use Validator as BaseValidator

abstract class Validator {

	protected $validator;

	public function validate($input)
	{
		$this->validator = BaseValidator::make($input, static::$rules);

		return $this->validator->passes();
	}

	public function errors()
	{
		return $this->validator->messages();
	}

}
