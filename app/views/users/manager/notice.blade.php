{{ Form::open(array('url'=>'notice', 'class'=>'form-notice')) }}		

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

	
	{{ Form::text('notice', null, array('class'=>'input-block-level', 'placeholder'=>'Notice')) }}
	<br>
	{{ Form::submit('Post Notice', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}