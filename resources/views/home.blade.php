@extends('layouts.app')

@section('title')
	Home
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<p>Nice to see you {{ Auth::user()->name }}!</p>
					<p>You have <strong>
						@if(count($switches) == 1)
							1 switch
						@else
							{{ count($switches) }} switches
						@endif
						.</strong></p>
				</div>
			</div> <!--/panel-->
		</div><!--/col-md-10-->
	</div><!--/row-->

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@if(count($switches) > 0)
				@include('partials.switch-list')
			@else
				@include('partials.switch-new')
			@endif
		</div><!--/col-md-10-->
	</div><!--/row-->

</div>
@endsection
