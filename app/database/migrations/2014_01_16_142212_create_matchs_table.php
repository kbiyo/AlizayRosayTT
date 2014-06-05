<?php

use Illuminate\Database\Migrations\Migration;

class CreateMatchsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matchs', function($table)
		{
			$table->increments('id');
			$table->integer('id_journee')->unsigned();
			$table->integer('id_equipe_d')->unsigned();
			$table->integer('id_equipe_e')->unsigned();
			$table->integer('score_d')->unsigned();
			$table->integer('score_e')->unsigned();
			$table->boolean('played');
			$table->timestamps();

			$table->foreign('id_journee')->references('id')->on('journees');
			$table->foreign('id_equipe_d')->references('id')->on('config_championnats');
			$table->foreign('id_equipe_e')->references('id')->on('config_championnats');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('matchs', function($table)
		{
			$table->dropForeign('matchs_id_journee_foreign');
			$table->dropForeign('matchs_id_equipe_d_foreign');
			$table->dropForeign('matchs_id_equipe_e_foreign');
		});
		
		Schema::dropIfExists('matchs');
	}

}