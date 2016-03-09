<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
    	## passing an array
    	$people = [
    		'Salumeh', 'Manu', 'Cesar'
    	];

    	return view('pages.about', compact('people'));
    	/* Classic

    		$name = '<span style="color:red">Esteban</span>';
    		return view('pages.about')->with('name', $name);
		*/
    	/* Passing an array
	    	return view('pages.about')->with([
	    		'first' => 'Esteban',
	    		'last' => 'Gallego',
	    		'name' => $name
	    	]);
    	*/ 

		/*
		Passing data with compact php function
	 
	    $first = 'Esteban';
	    $last = 'Gallego';
	    $name = '<span style="color:red">Esteban</span>';
		return view('pages.about', compact('first', 'last', 'name'));
    	*/
    }

    public function contact()
    {
    	return view('pages.contact');
    }

}
