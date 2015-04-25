<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class CurrentUser extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'current_users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function UserInfo(){
		return $this->hasOne('UserInfo','userID','userID');
	}
	public function UserProfile(){
		return $this->hasOne('UserProfile','userID','userID');
	}
	public function UserFin(){
		return $this->hasOne('UserFin','userID','userID');
	}
	
}
