<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwitchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('switches', function($table)
			{
				$table -> increments('id');
				$table -> integer('user_id');
				$table -> string('title', 127);
				$table -> string('to_email');
				$table -> text('text');
				$table -> integer('status');
				$table -> timestamps();
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
