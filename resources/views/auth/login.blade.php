@extends('layouts.app')

@section('title')
	Login
@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@include('/partials/login')
		</div>
	</div>
</div>
@endsection