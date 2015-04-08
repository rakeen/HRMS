<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
	{{ HTML::style('bs3/css/bootstrap.min.css') }}
	{{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
	{{ HTML::style('css/style.css') }}
</head>
<body>

@if( Session::has('message') )
<div class="alert alert-success alert-block fade in">
	<button data-dismiss="alert" class="close close-sm" type="button">
		<i class="fa fa-times"></i>
	</button>

	{{ Session::get('message') }}
</div>
@endif

<div class="row">
	<div class="col-md-2"></div>
	
	<div class="col-md-8">
		<div class="panel">
			<div class="panel-body">
			{{ Form::open(array('url'=>'apply', 'class'=>'position-center')) }}
				
				
				{{ Form::text('first_name',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'First Name') ) }}
				{{ Form::text('last_name',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'Last Name') ) }}
				
				{{ Form::text('age',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'Age') ) }}
				{{ Form::text('sex',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'Sex') ) }}
				
				<div class="input-group input-group-lg">
				<span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
				{{ Form::text('phone',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'Phone') ) }}				
				</div>
				{{ Form::text('address',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'Address') ) }}

				{{ Form::text('email', null, array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>'Email Address')) }}
				{{ Form::password('password', array('class'=>'form-group form-control input-lg input-block-level', 'placeholder'=>'Password')) }}
				{{ Form::password('password_confirmation', array('class'=>'form-group form-control input-lg input-block-level', 'placeholder'=>'Confirm Password')) }}

				
				{{ Form::submit('Apply', array('class'=>'form-control input-lg btn btn-large btn-primary btn-block'))}}
			{{ Form::close() }}
			</div>
		</div>
	</div>

	<div class="col-md-2"></div>
</div>

</body>
</html>