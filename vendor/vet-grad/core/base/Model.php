<?php

namespace vetgrad\base;

use vetgrad\Db;

abstract class Model
{
	public $attributes = [];
	public $errors = [];
	public $rules = [];

	public function __construct()
	{
		Db::instance();
	}
}