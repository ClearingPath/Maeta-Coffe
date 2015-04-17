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

}
