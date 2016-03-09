<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WelcomeController extends BaseController
{
	public function index()
	{
		return 'Hello word';
		// return view('welcome');
	}
	public function contact()
	{
		return view('pages.contact');
	}
}

