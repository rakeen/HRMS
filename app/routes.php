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
Route::get('home', function()
{
	return View::make('home');
});

Route::get('apply',function(){
	return View::make('apply');
});
Route::post('apply',array(
	'uses'=>'HomeController@applyCareer'
));


/** testing model binding
Route::model('user','CurrentUser');
Route::get('profile/{user}', function(CurrentUser $user)
{	
    echo $user->userID;
});
*/


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
Route::get('checkin',array(
	"before"=>'auth',
	"uses"=>'UserController@CheckIn'	
));
Route::post('checkin',array(
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
	"before"=>'auth',
	"uses"=>"UserController@elist"
));
Route::get('recruite',array(
	"uses"=>"UserController@recruite",
	"before"=>'auth',
));
Route::post('recruite',array(
	"uses"=>"UserController@pRecruite",
	"before"=>'auth',
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

Route::get('leave',array(
	"before"=>'auth',
	"uses"=>'UserController@leave'
));
Route::post('leave',array(
	"before"=>'auth',
	"uses"=>'UserController@postLeave'
));

Route::get('review-leave',array(
	"before"=>'auth',
	"uses"=>'UserController@review_leave'	
));
Route::post('review-leave',array(
	"before"=>'auth',
	"uses"=>'UserController@post_review_leave'
));

Route::get('salary',array(
	"before"=>'auth',
	"uses"=>'UserController@salary'
));
Route::post('salary',array(
	"before"=>'auth',
	"uses"=>'UserController@editSalary'
));



/* custom form element for blade */
Form::macro('date', function()
{
    return '<div class="input-group input-large form-group input-lg" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                        <input type="text" class=" form-control dpd1" name="from">
                                        <span class=" input-group-addon">To</span>
                                        <input type="text" class=" form-control dpd2" name="to">
                                    </div>';
});
Form::macro('toggle',function($name,$on,$off){	

	$x = '<input type="checkbox" checked class="switch-large" id="animated-switch" checked data-off="danger" data-animated="true" data-on-label=';
	$x.=$on;
	$x.=' data-off-label=';	
	$x.=$off;
	$x.=' name=';
	$x.=$name;
	$x.=' >';
	return $x;	
});

/* for testing purpose */
Route::get('blank',function(){
	return View::make('blank');
});