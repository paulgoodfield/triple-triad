<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('u', 1);
			$table->string('r', 1);
			$table->string('d', 1);
			$table->string('l', 1);
			$table->tinyInteger('level')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}
