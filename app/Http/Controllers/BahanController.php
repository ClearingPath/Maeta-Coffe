<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateBahanBakuRequest;
use App\bahanBaku;

use Illuminate\Http\Request;

class BahanController extends Controller {

	public function create()
	{
		return view('bahan/create');
	}

	public function add_bahan(CreateBahanBakuRequest $request)
	{
		$input = $request->all();
		bahanBaku::create($input);

		return redirect('/');
	}
}
