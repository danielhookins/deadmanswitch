<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($newtable)
			{
				$newtable -> increments('id');
				$newtable -> string('email');
				$newtable -> string('full name', 127);
				$newtable -> string('password');
				$newtable -> string('remember_token');
				$newtable -> dateTime('last_login');
				$newtable -> timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
