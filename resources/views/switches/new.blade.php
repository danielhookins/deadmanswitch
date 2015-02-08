@extends('layouts.app')

@section('title')
	New Switch
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			@include('partials.switch-new')

		</div> <!--/col-md-9-->
	</div> <!--/row-->
</div> <!--/container-->

@stop
