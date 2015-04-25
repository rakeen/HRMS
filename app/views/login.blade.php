{{-- this page is taken from: https://scotch.io/tutorials/simple-and-easy-laravel-login-authentication --}}
<!doctype html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./css/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<style type="text/css">
		.box{
			font-size: 1.5em;
			font-weight: 500;
			text-align: center;
			margin-top: 10%;
			border: 1px solid grey;
		}
		</style>
	</head>

	<body>

	@if(Session::has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-block fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <h4>
                    <i class="icon-ok-sign"></i>
                    Success!
                </h4>
                <p>{{ Session::get('message') }}</p>
            </div>
        </div>
    @endif
	

	<div class="box position-center">

	{{-- default vs Specific open()  :   http://laravel-recipes.com/recipes/124/opening-a-new-html-form --}}

	{{ Form::open(array('url' => 'login')) }}

	<h1>Login</h1>

	<!-- if there are login errors, show them here -->
	<p>
	    {{ $errors->first('email') }}
	    {{ $errors->first('password') }}
	</p>

	<p>
	    {{ Form::label('email', 'Email Address') }}
	    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
	</p>

	<p>
	    {{ Form::label('password', 'Password') }}
	    {{ Form::password('password') }}
	</p>

	<p>{{ Form::submit('Submit!',array('class'=>'btn btn-primary btn-lg')) }}</p>
	{{ Form::close() }}

	</div>

	</body>
</html>