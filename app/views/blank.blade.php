@extends('users.dashboard')

@section('style')
    <link rel="stylesheet" href="assets/bootstrap-switch-master/build/css/bootstrap3/bootstrap-switch.css" />        
    
@stop

@section('main')
        
        
        <input type="checkbox" checked class="switch-large" id="animated-switch" checked data-off="danger" data-animated="true">
        
    
@stop


@section('script')
        <script src="js/lib/jquery.js"></script>

        <script src="assets/bootstrap-switch-master/build/js/bootstrap-switch.js"></script>        
   
        <script type="text/javascript">
            $(function() {        
                $('input[type="checkbox"]').not('#create-switch').bootstrapSwitch();
            });
        </script>

@stop
