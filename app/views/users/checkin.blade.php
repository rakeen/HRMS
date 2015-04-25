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


<?php

$currentDateTime= date('Y-m-d h:i:s');
echo $currentDateTime;
?>

{{ Form::open(array('action' => 'UserController@postCheckIn', 'method'=> 'post')) }}	
	{{ Form::hidden('checkin',$currentDateTime) }}
	{{ Form::submit('Check-In') }}
{{Form::close()}}

@stop