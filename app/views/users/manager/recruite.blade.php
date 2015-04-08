@extends('users.dashboard')

@section('main')

<?php $ulist = UserInfo::where('userID','=',null)->get() ?>
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
	    						<h2>{{ $u->first_name." ".$u->last_name }}</h2>
	    						<h5 class="text-muted">{{ $u->email }}</h5>
	    					</div>
	    					<div class="col-md-12 panel-body">
	    						<span class="pull-right">

	    							<button class="btn btn-info">Mail for Interview</button>
		    						<button class="btn btn-danger">Reject</button>
		    						<button class="btn btn-primary">Recruite</button>
		    						
	    						</span>
	    					</div>
	    					
	    						
	    					
	    				</div>
	    			</div>
	    		</div>
	    	
	    </div>    
	</div>
	
	@endforeach

@stop