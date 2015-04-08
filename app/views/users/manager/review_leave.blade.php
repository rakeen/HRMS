@extends('users.dashboard')


@section('style')
	{{HTML::style('assets/bootstrap-switch-master/build/css/bootstrap3/bootstrap-switch.css')}}
@stop

@section('main')

	@if( Session::has('message') )
		<div class="alert alert-success alert-block fade in">
			<button data-dismiss="alert" class="close close-sm" type="button">
				<i class="fa fa-times"></i>
			</button>

			{{ Session::get('message') }}
		</div>
	@endif



	<?php $l = Leave::where('status','=','TBR')->get() ?>

	<div class="row">

		@foreach($l as $x)
		<div class="col-md-12">
			<div class="panel position-center">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4" style="border-right: solid 2px #eee ">
							<h3>{{$x->requested_by}}</h3>
							<h4>date: {{$x->starting_date}}-{{$x->ending_date}}</h4>
						</div>

						<div class="col-md-7">
							<p class="">{{ $x->reason }}</p>					
						</div>
						<div class="col-md-1">
							<span class="text-muted">{{ $x->id }}</span>
						</div>
					</div>
					
					<span class="pull-right">
					{{Form::open(array('url'=>'review-leave')) }}
						{{ Form::hidden('id',$x->id) }}
						{{ Form::toggle("tgle","Accept","Reject") }}
						{{ Form::submit('Submit',array('class'=>'btn btn-primary')) }}
					{{Form::close()}}
					</span>
				</div>
			</div>
		</div>		
		@endforeach		
	</div>

@stop

@section('script')	
	{{HTML::script('js/lib/jquery.js')}}
	{{HTML::script('assets/bootstrap-switch-master/build/js/bootstrap-switch.js')}}	

	<script type="text/javascript">
		$(function() {
		    $('input[type="checkbox"]').not('#create-switch').bootstrapSwitch();

		    
		});
	</script>
@stop