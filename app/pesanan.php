<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model {

	protected $fillable= [
		'menu_id',
		'jumlah',
		'tanggal',
	]

	protected $dates = ['tanggal'];

}
