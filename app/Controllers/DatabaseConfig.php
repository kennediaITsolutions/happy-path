<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DatabaseConfig extends BaseController
{
	public function index()
	{
		return view ('config');
	}
}
