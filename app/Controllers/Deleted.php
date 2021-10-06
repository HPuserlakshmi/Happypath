<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Deleted extends BaseController
{
	public function index()
	{
		return view('deleted');
	}
}
