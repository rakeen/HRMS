@extends('users.dashboard')

@section('main')

	<?php $ulist = CurrentUser::where('user_type','=',"Employee")->get() ?>

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
	    						<br>
	    						<div class="col-md-4"><h3>{{ $u->UserFin->salary." BDT" }}</h3></div>
	    						<div class="col-md-4"><h3><div class="btn btn-warning sal-update-btn">Change Salary</div></h3></div>
	    					</div>

	    					<div class="col-md-3 sal-update" style="display:none">
	    							{{ Form::open(array('url' => 'salary')) }}
	    							{{ Form::text('salary',null,array('class'=>'form-group form-control input-blok-level input-lg', 'placeholder'=>'New Salary') ) }}
	    							{{ Form::hidden('uid',$u->userID) }}
	    							{{ Form::submit('Update', array('class'=>'form-control input-lg btn btn-large btn-primary btn-block'))}}
	    							{{ Form::close() }}
	    					</div>


	    				</div>

	    			</div>
	    		</div>
	    	
	    </div>    
	</div>
	@endforeach

@stop


@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
		    $(".sal-update-btn").click(function(){
		    	//console.log('s');
		        $(".sal-update").toggle(200);
		    });
		});
	</script>
@stop