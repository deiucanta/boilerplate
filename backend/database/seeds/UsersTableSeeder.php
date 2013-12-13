<?php

use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create
		([
			'email'    => 'admin@domain.com',
			'username' => 'admin',
			'password' => Hash::make('1234'),
		]);
	}

}