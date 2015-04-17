<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MenuController extends Controller {

	public function input()
	{
		return view('menu.input');
	}

}
