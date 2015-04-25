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
	    						<h5 class="text-muted">{{ $u->designation}}</h5>
	    						<h3 class="">{{ "Age: ".$u->UserInfo->age }}</h3>
	    						<h3 class="">{{ "Sex: ".$u->UserInfo->sex }}</h3>
	    						<h3 class="">{{ "Marital Status: ".$u->UserInfo->marital_status }}</h3>
	    						<h3 class="">{{ "Birthdate: ".$u->UserInfo->birthdate }}</h3>
	    						<h3 class="">{{ "Phone: ".$u->UserInfo->phone }}</h3>
	    						<h3 class="">{{ "Address: ".$u->UserInfo->address }}</h3>
	    					</div>
	    				</div>

	    			</div>
	    		</div>
	    	
	    </div>    
	</div>
	@endforeach

@stop