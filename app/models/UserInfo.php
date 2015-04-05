<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserInfo extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users_info';
	public $timestamps = false;		// the schema and model are different. you need to specify the shema in your model
									// otherwise it won't recognize

	public function CurrentUser(){
		return $this->belongsTo('CurrentUser','userID','userID');
	}

}
