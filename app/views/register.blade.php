<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
		{{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{ Form::close() }}

</body>
</html>
