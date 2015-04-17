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
			$table->integer('id_menu')->unsigned();
			$table->integer('id_bahan_baku')->unsigned();
			$table->timestamps();

			$table->foreign('id_bahan_baku')
				  ->references('id')
				  ->on('bahan_bakus')
				  ->onDelete('cascade');

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
		Schema::drop('reseps');
	}

}
