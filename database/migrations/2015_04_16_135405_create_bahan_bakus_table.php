<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahanBakusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bahan_bakus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama')->unique();
			$table->decimal('jumlah_stok');
			$table->integer('harga_per_satuan');
			$table->string('satuan');
			$table->decimal('threshold');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bahan_bakus');
	}

}
