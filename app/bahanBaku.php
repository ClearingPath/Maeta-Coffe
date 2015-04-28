<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class bahanBaku extends Model {

	protected $fillable = [
		'nama',
		'jumlah_stok',
		'harga_per_satuan',
		'satuan',
		'threshold',
	];

	public function menu()
	{
		return $this->belongsToMany('App\menu','reseps');
	}

	public function listBelanja()
	{
		return $this->belongsToMany('App\menu','detail_belanjas');
	}


}
