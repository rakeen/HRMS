<?php

$currentDateTime= date('Y-m-d h:i:s');
echo $currentDateTime;
?>

{{ Form::open(array('action' => 'UserController@postCheckIn', 'method'=> 'post')) }}	
	{{ Form::hidden('checkin',$currentDateTime) }}
	{{ Form::submit('Check-In') }}
{{Form::close()}}