{{-- this page is taken from: https://scotch.io/tutorials/simple-and-easy-laravel-login-authentication --}}
<!doctype html>
<html>
	<head>
		<title>Look at me Login</title>
	</head>

	<body>


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

	<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}


	</body>
</html>