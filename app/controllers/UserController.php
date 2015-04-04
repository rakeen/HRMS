<?php

class UserController extends BaseController {


	public function postCheckIn(){		
		$db = new Checkin();
		$db->checkin= Input::get('checkin');		
		$db->save();

		echo Input::get('checkin');
	}

	public function postCheckOut(){		
		$db = new Checkin();
		$db->checkin= Input::get('checkout');		
		$db->save();

		echo Input::get('checkout');
	}

}
