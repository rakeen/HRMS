<?php $utype = Auth::user()->user_type; ?>
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