<?php

use Illuminate\Database\Migrations\Migration;

class CreateEquipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipes', function($table)
		{
			$table->increments('id');
			$table->integer('id_club')->unsigned();
			$table->integer('numero')->unsigned();
			$table->timestamps();

			$table->foreign('id_club')->references('id')->on('clubs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipes', function($table)
		{
			$table->dropForeign('equipes_id_club_foreign');
		});

		Schema::dropIfExists('equipes');
	}

}