<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\menu;
use App\bahanBaku;
use App\resep;
use App\pesanan;
use Carbon\Carbon;

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
		$menu = new menu;
		$menu->nama = $request->nama;
		$menu->harga = $request->harga;
		$menu->save();
		$counter = Input::get('count');
		for($x=0;$x<$counter;$x++){
			$nama = Input::get('input'.$x);
			$jumlah = Input::get('field'.$x);
			$bahan = bahanBaku::where('nama','=',$nama)->get()->first();
			$menu->bahanBaku()->attach($bahan->id);
			$resep = resep::latest()->first();
			$resep->jumlah = $jumlah;
			$resep->save();
		}

		return redirect('menu/update');
	}

	public function show_history() {
		$nowTime = Carbon\Carbon::now();
		/*$pesananBulanIni = pesanan::where(DB::raw('MONTH(tanggal)'), $nowTime->month)->get();
		$daftarMenuPesan = menu::where('id',$pesananBulanIni->menu_id)->get();
		$pesananBulanIni = DB::table('pesanans')
						->join('menus', 'pesanans.menu_id', '=', 'menus.id')
						->groupBy(DB::raw('tanggal'))
						->having(DB::raw('MONTH(tanggal)'), '=', $nowTime->month)
						->get();*/

		$pesananBulanIni = DB::table('pesanans')
						->join('menus', 'pesanans.menu_id', '=', 'menus.id')
						->orderBy('tanggal', 'desc')
						->having(DB::raw('MONTH(tanggal)'), '=', $nowTime->month)
						->get();

		return view('menu.histori', compact('pesananBulanIni'));
	}

	public function pesanan() {
		$menu = menu::get();

		return view('menu.pesanan',compact('menu'));
	}

	public function add_pesanan(Request $request)
	{
		$counter = Input::get('count');
		for($x=0;$x<$counter;$x++)
		{
			$nama = Input::get('input'.$x);
			$jumlah = Input::get('field'.$x);
			$menu = menu::where('nama','=',$nama)->get()->first();
			$pesanan = new pesanan;
			$pesanan->menu_id = $menu->id;
			$pesanan->jumlah = $jumlah;
			$pesanan->tanggal = Carbon\Carbon::now();
			$pesanan->save();
		}
		return redirect('menu/histori');	
	}
}
