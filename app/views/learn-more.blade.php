@extends('layouts.checkin-signup')

@section('title')
How it works
@stop 

@section('left-column-content')
<div class="col-md-9 col-md-offset-4 learn-more-box">
	<h2>How it works.</h2>
	<p>The Dead Man Switch is a fail-safe messaging application that will send your pre-written message if you fail to check in with the system every 7 days.</p>
</div>
@stop

@section('right-column-content')
<div class="row">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><strong>Sign me up!</strong></h3>
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