<?php

use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function($table)
		{
			$table->increments('id');
			$table->integer('id_supmenu')->unsigned()->nullable();
			$table->string('title');
			$table->string('link');
			$table->integer('position')->unsigned();
			$table->timestamps();

			$table->foreign('id_supmenu')->references('id')->on('menus');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('menus', function($table)
		{
			$table->dropForeign('menus_id_supmenu_foreign');
		});
		
		Schema::dropIfExists('menus');
	}

}