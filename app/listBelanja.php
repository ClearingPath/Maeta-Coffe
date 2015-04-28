<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class listBelanja extends Model {

	public function bahanBaku()
	{
		return $this->belongsToMany('App\bahanBaku','detail_belanjas')->withTimestamps();
	}

}
