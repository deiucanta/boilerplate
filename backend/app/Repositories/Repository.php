<?php namespace App\Repositories;

abstract class Repository {

	protected $model;

	public function __construct()
	{
		$modelName = 'App\\Models\\'.get_class($this);
		if (class_exists($modelName)) $this->model = new $modelName;
	}

	public function all()
	{
		return $this->model->all();
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function paginate($perPage)
	{
		return $this->model->paginate($perPage);
	}

}