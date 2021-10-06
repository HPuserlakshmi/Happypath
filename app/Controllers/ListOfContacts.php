<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ListOfContacts extends BaseController
{
	public function index()
	{
		return view ('list-of-contacts');
	}
}
