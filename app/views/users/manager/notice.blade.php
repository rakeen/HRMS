{{ Form::open(array('url'=>'notice', 'class'=>'form-notice')) }}		

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

	<div class="position-center">
	{{ Form::text('notice', null, array('class'=>'input-lg form-control', 'placeholder'=>'Notice')) }}
	<br>
	{{ Form::submit('Post Notice', array('class'=>'btn btn-large btn-primary'))}}
	</div>
{{ Form::close() }}