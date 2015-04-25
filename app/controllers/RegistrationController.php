<?php

class RegistrationController extends BaseController{


	public function showForm(){
		return View::make('register');
	}



	public function process(){
		
		$rules = array(
			'email'=>'required|email|exists:users_info,email',
			'password'=>'required|between:6,22|confirmed',
			'password_confirmation'=>'required|between:6,22' // |alpha_num|
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->passes()){

			$u=UserInfo::where('email','=',Input::get('email'))->first(); // ->get()  converts them into an array. usefull for looping
			if($u->userID =="NA"){
				return Redirect::to('register')->with('message',"Sorry, but you've been rejected! :(")->withInput();
			}

			$user = new CurrentUser;			

			$userID = "SE".str_random(3);

			while( CurrentUser::where('userID','=',$userID)->first() ){
				$userID = "SE".str_random(3);
			}

			$user->userID = $userID;
			$user->password = Hash::make(Input::get('password'));
			$user->user_type = "Employee";
			$user->email = Input::get('email');
			$user->save();

			
			$userInfo = UserInfo::where('email','=',Input::get('email'))
								->update(array('userID'=>$userID));

			$up = new UserProfile;
			$up->userID=$userID;
			$up->save();

			return Redirect::to('login')->with('message',"welcome to HRMS! please login to continue.");
		}
		else{
			return Redirect::to('register')
							->with('message', 'The following errors occurred')
							->withErrors($validator)
							->withInput();
		}
	}

}