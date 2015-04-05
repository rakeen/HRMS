<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
});



Route::get('login', 'HomeController@showLogin');
Route::post('login','HomeController@doLogin');

Route::get('register','RegistrationController@showForm');
Route::post('register','RegistrationController@process');


// auth is a default filter that comes with laravel
Route::filter('auth', function(){
  if(Auth::guest()) return Redirect::guest('login');
});

Route::get('dashboard',array(
	"before"=>'auth',
	"uses"=>'HomeController@Dashboard',
	"as"=>'dashboard'
));
Route::post('dashboard',array(
	"before"=>'auth',
	"uses"=>'UserController@postCheckIn',	
));
Route::get('profile',array(
	"before"=>'auth',
	"uses"=>"UserController@profile"
));
Route::post('profile',array(
	"before"=>'auth',
	"uses"=>'UserController@editProfile'
));

Route::get('elist',array(
	"uses"=>"UserController@elist"
));

Route::get('logout','HomeController@logout');

Route::get('notice',array(
	"before"=>'auth',
	"uses"=>'UserController@notice'
));
Route::post('notice', array(
	"before"=>'auth',
	"uses"=>'ManagerController@postNotice'
));