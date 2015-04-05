@extends('users.dashboard')
@section('main')

<?php $ulist = CurrentUser::where('user_type','=',"Employee")->get() ?>
{{-- ->get() converts it to an array of object! :D --}}

	@foreach($ulist as $u)
	<div class="row">
		<div class="col-md-12">

	    		<div class="panel col-md-12">
	    			<div class="panel-body">
	    				
	    				<div class="row">
	    					<div class="col-md-4">
	    						<img src="images/lock_thumb.jpg">
	    					</div>
	    					<div class="col-md-8">
	    						<h2>{{ $u->UserInfo->first_name." ".$u->UserInfo->last_name }}</h2>
	    						<h5 class="text-muted">{{ $u->designation }}</h5>
	    					</div>
	    				</div>

	    			</div>
	    		</div>
	    	
	    </div>    
	</div>
	@endforeach

@stop