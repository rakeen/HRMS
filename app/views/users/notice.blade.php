<?php $utype = Auth::user()->user_type; ?>
@extends('users.dashboard')

@section('main')
	<div class="row">
	    
	    	<?php $notices = Notice::all() ?>
	    	@foreach($notices as $notice)
	    		<div class="panel col-md-12">
	    			<p class="panel-body">
	    				{{ $notice->notice }}
	    			</p>
	    		</div>
	    	@endforeach
	    
	</div>

	@if($utype=="Manager")
		@include('users.manager.notice')
	@endif
@stop