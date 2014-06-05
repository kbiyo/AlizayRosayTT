<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogViewNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_logs_views', function($table)
		{
			$table->increments('id');
			$table->integer('id_news')->unsigned();
			$table->integer('id_author')->unsigned()->nullable();
			$table->string('hash_remote_addr', 255)->nullable();
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
		Schema::table('news_logs_views', function($table)
		{
			$table->dropForeign('news_logs_views_id_news_foreign');
			$table->dropForeign('news_logs_views_id_author_foreign');
		});
		
		Schema::dropIfExists('news_logs_views');
	}

}
