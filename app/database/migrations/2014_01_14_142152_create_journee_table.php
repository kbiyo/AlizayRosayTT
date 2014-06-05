<?php

use Illuminate\Database\Migrations\Migration;

class CreateJourneeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('journees', function($table)
		{
			$table->increments('id');
			$table->integer('id_championnat')->unsigned();
			$table->integer('numero')->unsigned();
			$table->datetime('date');
			$table->timestamps();

			$table->foreign('id_championnat')->references('id')->on('championnats');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('journees', function($table)
		{
			$table->dropForeign('journees_id_championnat_foreign');
		});

		Schema::dropIfExists('journees');
	}

}