<?php $user_id = Auth::user()->id; ?> 

@extends('layouts.dashboard')

@section('title')
New Switch
@stop 

@section('styles')
<link href="{{ asset('_/css/switch.css') }}" rel="stylesheet">
@stop

@section('main-content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="message-input-vertical">
			<h2>New Switch</h2>
			<p>Create a new switch.</p>
			<form>
			  <div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="To Email">
			  </div>
			  <div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subject">
			  </div>
			  <div class="form-group">
				<textarea class="form-control" rows="10"></textarea>
			  </div>
			  <div class="form-group form-inline">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
				<div class="btn-group pull-right" data-toggle="buttons">
				  <label class="btn btn-default active">
					<input type="radio" name="options" id="option1" autocomplete="off" checked>Active
				  </label>
				  <label class="btn btn-default">
					<input type="radio" name="options" id="option2" autocomplete="off"> Disabled
				  </label>
				</div>
			  </div>
			</form>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->
@stop

@section('breadcrumbs')
<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
<li>{{ HTML::linkRoute('user.switch.index', 'Your Switches', $user_id) }}</li>
<li class="active">{{ HTML::linkRoute('user.switch.create', 'New Switch', $user_id) }}"></li>
@stop