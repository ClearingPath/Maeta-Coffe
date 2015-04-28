<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model {

	protected $fillable = [
		'nama',
		'harga',
	];

	public function bahanBaku()
	{
		return $this->belongsToMany('App\bahanBaku','reseps')->withTimestamps();
	}
}
