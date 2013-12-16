<?php namespace App\Mailers;

class Sample extends Mailer
{
	public function confirm($user)
	{
		$data = array();
		$view = 'account.confirm';
		$email = $user->email;
		$subject = 'Email Confirmation';

		$this->send($view, $data, $email, $subject);
	}
}