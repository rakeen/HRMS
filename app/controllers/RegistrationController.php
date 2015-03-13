<?php

class RegistrationController extends BaseController{


	public function showForm(){
		return View::make('register');
	}



	public function process(){
		
		$rules = array(
			'firstname'=>'required|alpha|min:2',
			'lastname'=>'required|alpha|min:2',
			'email'=>'required|email|unique:users',
			'username'=>'required|unique:users',
			'password'=>'required|alpha_num|between:6,12|confirmed',
			'password_confirmation'=>'required|alpha_num|between:6,12'
		);

		$validator = Validator::make(Input::all(),$rules);

		if($validator->passes()){
			$user = new User;
			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			//return View::make("success");
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