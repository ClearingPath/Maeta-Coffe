<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class resep extends Model {

	protected $fillable = [
		'id_menu',
		'id_bahan',
	];

}
