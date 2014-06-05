<?php

use Illuminate\Database\Migrations\Migration;

class CreateRightTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rights', function($table)
		{
			$table->increments('id');
			$table->string('category');
			$table->string('value');
			$table->string('label');
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
		Schema::dropIfExists('rights');
	}

}