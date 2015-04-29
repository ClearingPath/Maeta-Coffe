<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\menu;
use App\bahanBaku;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateMenuRequest;

use View;
use DB;

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
	
	public function showMenuDetail($id_menu)
	{
		$menus = DB::table('menus')
					->select('menus.id', 'menus.nama')
					->where('menus.id', '=', $id_menu)
					->get();
					
		$reseps = DB::table('menus')
					->join('reseps', 'menus.id', '=', 'reseps.menu_id')
					->join('bahan_bakus', 'bahan_bakus.id', '=', 'reseps.bahan_baku_id')
					->select('bahan_bakus.nama')
					->where('menus.id', '=', $id_menu)
					->get();
		return view('menu.detail')->with('resep', $reseps)->with('menu', $menus);
	}

	public function add_menu(CreateMenuRequest $request)
	{
		// $input = $request->all();
		// $bahan = bahanBaku::where('nama', '=', )
		
		// dimasukinnya per loop kayaknya (?)
		$counter = Input::get('count');
		$nama = Input::get('nama');
		$harga = Input::get('harga');
		for($x=0;$x<=$counter;$x++){
			echo "<label>";
			$input = Input::get('input'.$x);
			$field = Input::get('field'.$x);
			echo "</label><br />";
		}

		return view('home');
	}

	public function show_history() {
		
	}

}
