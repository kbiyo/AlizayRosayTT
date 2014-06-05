<?php

use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table)
		{
			$table->increments('id');
			$table->integer('id_news')->unsigned();
			$table->integer('id_author')->unsigned()->nullable();
			$table->string('username', 50)->nullable();
			$table->string('hash_remote_addr', 255)->nullable();
			$table->text('message');
			$table->integer('liked')->default('0');
			$table->integer('hated')->default('0');
			$table->integer('spam')->default('0');
			$table->boolean('is_enable')->default('1');
			$table->timestamps();

			$table->foreign('id_news')->references('id')->on('news');
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
		Schema::table('comments', function($table)
		{
			$table->dropForeign('comments_id_news_foreign');
			$table->dropForeign('comments_id_author_foreign');
		});
		
		Schema::dropIfExists('comments');
	}

}