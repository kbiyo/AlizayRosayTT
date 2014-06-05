<?php

use Illuminate\Database\Migrations\Migration;

class CreateConfChampionnatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('championnats', function($table)
		{
			$table->increments('id');
			$table->integer('nbEquipe')->unsigned();
			$table->integer('nbPhase')->unsigned();
			$table->integer('phaseStart')->unsigned()->nullable();
			$table->string('saison', 9);
			$table->string('niveau', 50);
			$table->integer('division')->unsigned();
			$table->string('poule', 2);
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
		Schema::dropIfExists('championnats');
	}

}