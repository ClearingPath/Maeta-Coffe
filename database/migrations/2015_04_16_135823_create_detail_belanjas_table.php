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
			$table->integer('list_id')->unsigned()->index();
			$table->integer('bahan_baku_id')->unsigned()->index();
			$table->timestamps();

			$table->foreign('bahan_baku_id')
				  ->references('id')
				  ->on('bahan_bakus')
				  ->onDelete('cascade');

			$table->foreign('list_id')
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
