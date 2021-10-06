<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
	public function index()
	{
		return view ('logout');
	}
}
