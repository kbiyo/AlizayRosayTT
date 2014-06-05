<?php

use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function($table)
		{
			$table->increments('id');
			$table->integer('id_author')->unsigned();
			$table->string('image', 255);
			$table->string('title', 255);
			$table->text('shortContent');
			$table->text('content');
			$table->timestamp('published_at');
			$table->boolean('is_enable')->default('1');
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
		Schema::table('news', function($table)
		{
			$table->dropForeign('news_id_author_foreign');
		});
		
		Schema::dropIfExists('news');
	}

}