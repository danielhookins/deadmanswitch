<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwitches extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('switches', function($newtable)
			{
				$newtable -> increments('id');
				$newtable -> integer('user');
				$newtable -> integer('message');
				$newtable -> string('to_email');
				$newtable -> string('status');
				$newtable -> dateTime('send_date');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('switches');
	}

}
