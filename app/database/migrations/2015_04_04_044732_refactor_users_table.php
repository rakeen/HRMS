<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RefactorUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('users_info',function($table){

			$table->increments('id');
			$table->string('userID',5)->nullable();

			$table->string('first_name',32);
			$table->string('last_name',32);
			$table->string('email',120);

			$table->integer('age'); 	// second param of integer is to define if it is a primary key or not  Bool value
			$table->string('sex',6); 	// M/F boolean
			$table->string('marital_status',10);
			$table->date('birthdate');
			$table->integer('phone')->nullable(); 	
			$table->string('address',300);
		});


		Schema::create('current_users',function($table){
			$table->string('userID',5);
			$table->string('password',64);

			$table->string('remember_token', 100)->nullable();
			$table->timestamps();

			$table->string('user_type',8);
			$table->string('designation',50);

		});

		Schema::create('users_fin',function($table){
			$table->string('userID',5);
			$table->integer('salary')->unsigned();

			$table->timestamps();
		});

		Schema::create('users_profile',function($table){
			$table->string('about_me',500);
			$table->string('pro_pic',100);

			$table->string('fb_id',30);
			$table->string('linkedin_id',30);
			$table->string('github_id',30);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(array('users_info','users_profile','users_fin','current_users'));
	}

}
