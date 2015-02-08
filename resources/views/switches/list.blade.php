@extends('layouts.app')

@section('title')
	Switch List
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 main-content">
			@include('partials.switch-list')
		</div>
	</div>
</div>
@stop
