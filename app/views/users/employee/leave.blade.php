@extends('users.dashboard')

@section('main')

	@if( Session::has('message') )
	<div class="alert alert-success alert-block fade in">
		<button data-dismiss="alert" class="close close-sm" type="button">
			<i class="fa fa-times"></i>
		</button>

		{{ Session::get('message') }}
	</div>
	@endif

	<div class="row">
		<div class="col-md-12">
			<div class="panel position-center">
				<div class="panel-body">
					{{Form::open(array('url'=>'leave','class'=>''))}}
						{{ Form::text('reason',null,array('class'=>'form-group form-control input-block-level input-lg', 'placeholder'=>"Why do you want a Leave?") ) }}
						{{Form::date()}}
						{{Form::submit('submit',array('class'=>'form-control input-lg btn btn-large btn-primary btn-block'))}}
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>

@stop

@section('script')
	{{HTML::script('assets/bootstrap-daterangepicker/moment.min.js')}}
	{{HTML::script('assets/bootstrap-daterangepicker/daterangepicker.js')}}
	<script type="text/javascript">
		$(function(){
			window.prettyPrint && prettyPrint();

				$('.default-date-picker').datepicker({
        			format: 'mm-dd-yyyy'
    		  	});
				$('.dpYears').datepicker();
				$('.dpMonths').datepicker();

			var nowTemp = new Date();
			var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

			var checkin = $('.dpd1').datepicker({
			    onRender: function(date) {
			        return date.valueOf() < now.valueOf() ? 'disabled' : '';
			    }
			}).on('changeDate', function(ev) {
			        if (ev.date.valueOf() > checkout.date.valueOf()) {
			            var newDate = new Date(ev.date)
			            newDate.setDate(newDate.getDate() + 1);
			            checkout.setValue(newDate);
			        }
			        checkin.hide();
			        $('.dpd2')[0].focus();
			    }).data('datepicker');

			var checkout = $('.dpd2').datepicker({
			    onRender: function(date) {
			        return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
			    }
			}).on('changeDate', function(ev) {
			        checkout.hide();
			    }).data('datepicker');
			});

		});

	</script>
@stop