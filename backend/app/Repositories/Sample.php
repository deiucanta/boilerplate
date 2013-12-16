<?php namespace App\Repositories;

class Sample extends Repository {

	public function findByName($name)
	{
		return $this->model->whereName($name)->get();
	}

}