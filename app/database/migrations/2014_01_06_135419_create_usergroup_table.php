<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsergroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_group', function($table)
		{
			$table->increments('id');
			$table->integer('id_user')->unsigned();
			$table->integer('id_group')->unsigned();

			$table->foreign('id_user')->references('id')->on('users');
			$table->foreign('id_group')->references('id')->on('groups');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_group', function($table)
		{
			$table->dropForeign('user_group_id_user_foreign');
			$table->dropForeign('user_group_id_group_foreign');
		});
		
		Schema::dropIfExists('user_group');
	}

}