<?php

use Illuminate\Database\Migrations\Migration;

class CreateConfigChampionnatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('config_championnats', function($table)
		{
			$table->increments('id');
			$table->integer('id_championnat')->unsigned();
			$table->integer('id_club')->unsigned();
			$table->integer('numero_equipe')->unsigned();
			$table->integer('position')->unsigned();
			$table->timestamps();

			$table->foreign('id_championnat')->references('id')->on('championnats');
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
		Schema::table('config_championnats', function($table)
		{
			$table->dropForeign('config_championnats_id_championnat_foreign');
			$table->dropForeign('config_championnats_id_club_foreign');
		});
		
		Schema::dropIfExists('config_championnats');
	}

}