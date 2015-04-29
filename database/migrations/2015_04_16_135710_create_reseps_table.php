<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reseps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('menu_id')->unsigned();
			$table->integer('bahan_baku_id')->unsigned();
			$table->integer('jumlah');
			$table->timestamps();

			$table->foreign('bahan_baku_id')
				  ->references('id')
				  ->on('bahan_bakus')
				  ->onDelete('cascade');

		 	$table->foreign('menu_id')
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
		Schema::drop('reseps');
	}

}
