@extends('layouts.checkin-signup')

@section('title')
Check in or Sign up
@stop 

@section('left-column-content')
<div class="col-md-9 col-md-offset-4 welcome-box">
	<h2>Nice to see you.</h2>
	<p>Check in to let the system know that everything is okay.</p>
	<p>The Dead Man Switch is a fail-safe messaging application that will send your pre-written message if you fail to check in with the system every 7 days.</p>
	<div class="text-center">
		<a class="learn-more-btn" href="#">Learn more</a>
	</div>
</div>
@stop
