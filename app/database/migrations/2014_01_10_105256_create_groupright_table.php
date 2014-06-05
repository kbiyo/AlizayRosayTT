<?php

use Illuminate\Database\Migrations\Migration;

class CreateGrouprightTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_right', function($table)
		{
			$table->increments('id');
			$table->integer('id_group')->unsigned();
			$table->integer('id_right')->unsigned();

			$table->foreign('id_group')->references('id')->on('groups');
			$table->foreign('id_right')->references('id')->on('rights');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_right', function($table)
		{
			$table->dropForeign('group_right_id_group_foreign');
			$table->dropForeign('group_right_id_right_foreign');
		});

		Schema::dropIfExists('group_right');
	}

}