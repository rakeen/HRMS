<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('Dashboard')));
	}


	public function showWelcome()
	{
		return View::make('hello');
	}



	public function showLogin(){
		return View::make('login');
	}



	public function doLogin(){

		// check if the inputs are valid!   -> important for Security! B-)
		$rules = array(
		    'email'    => 'required|email', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:5' // password can only be alphanumeric and has to be greater than 3 characters
		);

		$validator = Validator::make(Input::all(), $rules);



		if ($validator->fails()) {
    		return Redirect::to('login')
    			->withErrors($validator) // send back all errors to the login form
	        	->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		}
		else{
			$userdata = array(
      			'email'     => Input::get('email'),
        		'password'  => Input::get('password')
    		);

			if (Auth::attempt($userdata)) {
				// redirect to secure page
				Redirect::to('dashboard'); // dashboard not registered. how to redirect??
				//echo "Success! You are now logged in"; // echoing in controller is BAD!

				// if authentication successful we can access user data
				echo "Hello ".Auth::user()->first_name."!";
			}
			else{
				return Redirect::to('login');
			}
		}

	}

	public function Dashboard(){
		Return View::make('dashboard');
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('login')->with('message','You are now logged out');
	}

}