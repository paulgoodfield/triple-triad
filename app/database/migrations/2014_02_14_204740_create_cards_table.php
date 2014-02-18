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
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->string('name');
			$table->tinyInteger('u')->unsigned();
			$table->tinyInteger('r')->unsigned();
			$table->tinyInteger('d')->unsigned();
			$table->tinyInteger('l')->unsigned();
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
