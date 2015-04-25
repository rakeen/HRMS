<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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

	<div class="box position-center">
	<h2>Registration</h2>
	<h4>
		{{ Session::get('message') }}
	</h4>

	{{ Form::open(array('url'=>'register', 'class'=>'form-signup')) }}		

		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>

		
		{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
		<br>
		{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		<br>
		{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
		<br>
		{{ Form::submit('Register', array('class'=>'btn btn-lg btn-primary'))}}
		{{ Form::close() }}
	</div>
</body>
</html>
