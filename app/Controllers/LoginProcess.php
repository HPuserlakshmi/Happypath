<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginProcess extends BaseController
{
	public function index()
	{
		return view ('loginprocess');
	}
}
