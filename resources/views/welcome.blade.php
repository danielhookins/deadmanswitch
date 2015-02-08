@extends('layouts.app')

@section('title')
	Welcome
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-7 main-content">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2>Nice to see you.</h2>
					<p>Check in to let the system know that everything is okay.</p>
					<p>The Dead Man Switch is a fail-safe messaging application that will send your pre-written message if you fail to check in with the system every 7 days.</p>
				</div>
			</div>
		</div><!--/Main-Content-->
		<div class="col-md-5 side-bar">
			@include('/partials/login')
			@include('/partials/register')
		</div><!--/Side-Bar-->
	</div>
</div>
@endsection