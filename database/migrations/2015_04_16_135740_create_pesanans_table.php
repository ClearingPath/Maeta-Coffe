<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesanans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_menu')->unsigned();
			$table->integer('jumlah');
			$table->timestamp('tanggal');
			$table->timestamps();

		  	$table->foreign('id_menu')
				  ->references('id')
				  ->on('menus')
				  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pesanans');
	}

}
