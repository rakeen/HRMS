<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveAplicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leave',function($table){
			$table->increments('id');
			$table->string('requested_by',12); 		// UserID
			$table->date('starting');				// starting date of the leave
			$table->date('ending');
			$table->string('reason',30);

			$table->dateTime('requested_on');
			$table->string('status',30);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leave');
	}

}
