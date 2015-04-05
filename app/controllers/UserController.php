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

	public function notice(){
		return View::make('users.notice');
	}
	public function profile(){
		return View::make('users.profile');
	}
	public function editProfile(){
		//return View::make('hello');
		
		$usr=UserProfile::where('userID','=',Auth::user()->userID)->update(array('about_me'=>Input::get('about_me')));
		return Redirect::to('profile')->with('message',"Profile Updated!")->withInput();
	}

	public function elist(){
		if(Auth::user()->user_type=="Manager") return View::make('users.manager.employee_list');
		//else return App::abort(404,"not found");
		else return Response::view('errors.404',array(),404);
		// 403 -> unauthorized action
		// 401 -> unauthorized error
	}
}
