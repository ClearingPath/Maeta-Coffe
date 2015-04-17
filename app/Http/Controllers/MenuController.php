<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\menu;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMenuRequest;

use View;

class MenuController extends Controller {

	public function input()
	{
		return view('menu.input');
	}
	
	public function showMenus()
	{
		$listMenu = menu::get();
		
		return View::make('menu.list')
					->with('lists', $listMenu);
	}

}
