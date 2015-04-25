@extends('users.dashboard')

@section('main')

@if(Session::has('message'))
    <div class="col-md-12">
        <div class="alert alert-success alert-block fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>
                <i class="icon-ok-sign"></i>
                Success!
            </h4>
            <p>{{ Session::get('message') }}</p>
        </div>
    </div>
@endif



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

	    							{{ Form::open(array('url' => 'recruite')) }}
	    							{{ Form::hidden('uid',$u->email) }}
	    							{{ Form::hidden('result','Rejected') }}
	    							{{ Form::submit('Reject', array('class'=>'btn btn-danger'))}}
	    							{{ Form::close() }}

	    							{{ Form::open(array('url' => 'recruite')) }}
	    							{{ Form::hidden('uid',$u->email) }}
	    							{{ Form::hidden('result','Recruited') }}
	    							{{ Form::submit('Recruite', array('class'=>'btn btn-primary'))}}
	    							{{ Form::close() }}

		    						
	    						</span>
	    					</div>
	    					
	    						
	    					
	    				</div>
	    			</div>
	    		</div>
	    	
	    </div>    
	</div>
	
	@endforeach

@stop