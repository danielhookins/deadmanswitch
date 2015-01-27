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
		<a class="learn-more-btn" href="{{ URL::to('/learn-more') }}">Learn more</a>
	</div>
</div>
@stop

@section('right-column-content')
<div class="row">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-body">
				{{ Form::open(array('route' => 'session.store')) }}
					<div class="form-group">
						{{ Form::text('email', Input::old('email'), array('placeholder'=>'Enter your email', 'class'=>'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control' )) }}
					</div>
					<!--
					<div class="checkbox">
						<label>
							{{ Form::checkbox('remember') }} Remember me
						</label>
					</div> -->
					{{ Form::submit('Check in', ['class'=>'btn btn-primary']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><strong>I'm new.</strong> Sign up</h3>
			</div>
			<div class="panel-body">
				{{ Form::open(array('route' => 'user.store')) }}
					<div class="form-group">
						{{ Form::text('name', Input::old('name'), array('placeholder'=>'Enter your name', 'class'=>'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::text('email', Input::old('email'), array('placeholder'=>'Email', 'class'=>'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control' )) }}
					</div>
					<!-- only need password once
					<div class="form-group">
						{{ Form::password('password_again', array('placeholder'=>'Password again', 'class'=>'form-control' )) }}
					</div> -->
					{{ Form::submit('Sign up to create your Dead Man Switch', ['class'=>'btn btn-success']) }}
				{{ Form::close() }}
			</div>
		</div>
  	</div>
</div>
@stop
