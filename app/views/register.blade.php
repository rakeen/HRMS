<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Registration</h2>


	{{ Form::open(array('url'=>'register', 'class'=>'form-signup')) }}		

		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>

		{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
		<br>
		{{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
		<br>
		{{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username')) }}
		<br>
		{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
		<br>
		{{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		<br>
		{{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
		<br>
		{{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{ Form::close() }}

</body>
</html>
