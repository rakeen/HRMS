<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function(Blueprint $table){
			$table->integer('age'); 	// second param of integer is to define if it is a primary key or not  Bool value
			$table->string('sex',6); 	// M/F boolean
			$table->string('marital_status',10);
			$table->date('birthdate');
			$table->integer('phone')->nullable(); 	
			$table->string('address',300);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// betterway to do: pass an array of coloumns
		Schema::table('users',function($table){
			$table->dropColumn('age','sex','marital_status','birthdate','phone','address');			
		});
	}

}
