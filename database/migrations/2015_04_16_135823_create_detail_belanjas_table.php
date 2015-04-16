<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBelanjasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_belanjas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_list')->unsigned();
			$table->integer('id_bahan_baku')->unsigned();
			$table->timestamps();

			$table->foreign('id_bahan_baku')
				  ->references('id')
				  ->on('bahan_bakus')
				  ->onDelete('cascade');

			$table->foreign('id_list')
				  ->references('id')
				  ->on('list_belanjas')
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
		Schema::drop('detail_belanjas');
	}

}
