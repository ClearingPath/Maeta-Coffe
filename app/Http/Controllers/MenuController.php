<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\menu;
use App\bahanBaku;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMenuRequest;

use View;

class MenuController extends Controller {

	public function input()
	{
		$bahan = bahanBaku::get();

		return view('menu.input', compact('bahan'));
	}
	
	public function showMenus()
	{
		$listMenu = menu::get();
		
		return View::make('menu.list')
					->with('lists', $listMenu);
	}

	public function add_menu(CreateMenuRequest $request)
	{
		$input = $request->all();

		dd($input);

		return $input;
	}

	public function show_history() {
		
	}

}
