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

		return redirect('bahan/show');
	}

	public function edit_bahan($id_bahan) {
		$input = bahanBaku::where('id',$id_bahan)->first();


		return view('bahan/edit', compact('input','id_bahan'));
	}

	public function delete_bahan($id_bahan) {
		$input = bahanBaku::where('id',$id_bahan)->first();
		$input->delete();

		return redirect('bahan/show');
	}

	public function edit_bahan_proceed(Request $request) {

		$edit = bahanBaku::where('id','=',$request->get('id'))->first();
		$edit->nama = $request->get('nama');
		$edit->jumlah_stok = $request->get('jumlah');
		$edit->harga_per_satuan = $request->get('harga');
		$edit->satuan = $request->get('satuan');
		$edit->threshold = $request->get('threshold');
		$edit->save();

		return redirect('bahan/show');
	}

	public function daftar() {
		$input = bahanBaku::all();

		return view('bahan/daftar', compact('input'));
	}
}
