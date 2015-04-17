<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\menu;
use App\resep;
use App\bahanBaku;

use Illuminate\Http\Request;

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
	
	public function showMenuDetail($id)
	{
		// $resep = resep::where('id_menu', '=', $id)->get();
		
		// $listBahan = bahanBaku::where('id', '=', $resp$id)->get();
		return view('menu.detail');
	}

}
