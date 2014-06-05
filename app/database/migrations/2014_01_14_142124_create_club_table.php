<?php

use Illuminate\Database\Migrations\Migration;

class CreateClubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clubs', function($table)
		{
			$table->increments('id');
			$table->string('nom', 255);
			$table->string('abreviation', 20);
			$table->integer('numero_affiliation')->unsigned();
			$table->string('logo', 255);
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
		Schema::dropIfExists('clubs');
	}

}