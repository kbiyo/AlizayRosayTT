<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
	    {
	        $table->increments('id');
	        $table->string('firstname', 50);
	        $table->string('lastname', 50);
	        $table->string('surname', 50);
	        $table->string('email', 250)->unique();
	        $table->string('photo');
	        $table->string('password', 150);
	        $table->string('last_user_agent', 250);
	        $table->string('last_ip', 50);
	        $table->datetime('last_connection');
	        $table->datetime('previous_connection');
	        $table->boolean('is_allowed')->default('1');
	        $table->boolean('is_enable')->default('1');
	        $table->string('remember_token',100)->nullable();
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
		Schema::dropIfExists('users');
	}

}