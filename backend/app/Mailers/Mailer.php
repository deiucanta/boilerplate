<?php namespace App\Mailers;

use Mail;

abstract class Mailer
{
	public function send($view, $data, $email, $subject)
	{
		Mail::queue($view, $data, function($message) use($email, $subject)
		{
			$message->to($email)->subject($subject);
		});

	}
}