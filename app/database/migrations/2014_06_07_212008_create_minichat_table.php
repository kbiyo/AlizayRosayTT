<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinichatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minichat', function($table)
		{
			$table->increments('id');
			$table->integer('id_author')->unsigned()->nullable();
			$table->string('thumb_up', 20);
			$table->string('hash_remote_addr', 255)->nullable();
			$table->boolean('message');
			$table->timestamps();

			$table->foreign('id_author')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('minichat', function($table)
		{
			$table->dropForeign('minichat_id_author_foreign');
		});
		Schema::dropIfExists('minichat');
	}

}
