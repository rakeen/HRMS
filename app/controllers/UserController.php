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

	public function leave(){
		return View::make('users.employee.leave');
	}
	public function postLeave(){
		$l = new Leave;
		$l->reason = Input::get('reason');		
		$l->requested_by = Auth::user()->userID;
		$l->requested_on = date('Y-m-d h:i:s');
		$l->status = "TBR"; //To Be Reviewed
		$l->save();

		return Redirect::to('leave')->with('message','submitted successfuly!');
	}

	public function review_leave(){
		if(Auth::user()->user_type !="Manager") return View::make('users.manager.review_leave');
		else return Response::view('errors.404',array(),404);
	}
	public function post_review_leave(){
		$l=Leave::find(Input::get('id'));
		if(Input::get('tgle')=="on")
			$l->status = "Accepted";
		else
			$l->status="Rejected";
		$l->save();
		return Redirect::to('review-leave')->with('message','operation executed successfuly');
	}

	public function profile(){
		return View::make('users.profile');
	}
	public function editProfile(){
		//return View::make('hello');
		
		$usr=UserProfile::where('userID','=',Auth::user()->userID)
							->update(array(
								'about_me'=>Input::get('about_me'),
								'fb_id'=>Input::get('fb-name'),
								'github_id'=>Input::get('github'),
								'linkedin_id'=>Input::get('linkedin'),
								));
		return Redirect::to('profile')->with('message',"Profile Updated!")->withInput();
	}



	public function elist(){
		if(Auth::user()->user_type=="Manager") return View::make('users.manager.employee_list');
		//else return App::abort(404,"not found");
		else return Response::view('errors.404',array(),404);
		// 403 -> unauthorized action
		// 401 -> unauthorized error
	}

	public function recruite(){
		if(Auth::user()->user_type!="Manager") return View::make('users.manager.recruite');
		else return Response::view('errors.404',array(),404);
	}
}
