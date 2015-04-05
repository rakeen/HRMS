<?php

class RegistrationController extends BaseController{


	public function showForm(){
		return View::make('register');
	}



	public function process(){
		
		$rules = array(
			'email'=>'required|email|exists:users_info,email',
			'password'=>'required|alpha_num|between:6,12|confirmed',
			'password_confirmation'=>'required|alpha_num|between:6,12'
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->passes()){
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

			echo "success";
		}
		else{
			return Redirect::to('register')
							->with('message', 'The following errors occurred')
							->withErrors($validator)
							->withInput();
		}
	}

}