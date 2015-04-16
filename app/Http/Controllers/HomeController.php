<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	
	public function index()
	{
		return view('home');
	}

	public function template() {
		return view('template');
	}

	public function lihatBahanBaku() {
		return view('lihatbahanbaku');
	}

	public function editBahanBaku() {
		return view('editbahanbaku');
	}

	public function inputBahanBaku() {
		return view('inputbahanbaku');
	}

	public function lihatDaftarAnggaran() {
		return view('lihatdaftaranggaran');
	}

	public function detailAnggaran() {
		return view('detailanggaran');
	}
}
