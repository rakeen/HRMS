<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChekinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkin', function(Blueprint $table)
		{
			$table->increments('id');
			
			//$table->integer('user_id')->unsigned(); // can't specify the length of INT in sql
			$table->string('user_id',5);
			$table->dateTime('checkin');
			$table->dateTime('checkout');

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
		Schema::drop('checkin');
	}

}
