<?php $user_id = Auth::user()->id; ?> 

@extends('layouts.dashboard')

@section('title')
Your Switches
@stop 

@section('styles')
@stop

@section('main-content')
<div class="hover-table">
	<h2 id="tables-hover-rows">Switches</h2>
	<p>Here are all of your active and inactive switches.</p>
	<div class="bs-example" data-example-id="hoverable-table">
		<table class="table table-hover">
			<thead>
				<tr>
					<th></th>
					<th>Label</th>
					<th>To Email</th>
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row"></th>
					<td>Test message</td>
					<td>danhookins@gmail.com</td>
					<td><a href="#">Active</a></td>
					<td>[<a href="#">edit</a>]</td>
					<td>[<a href="#">delete</a>]</td>
				</tr>
				<tr>
					<th scope="row"></th>
					<td><a class="btn btn-default" href="{{ URL::route('user.switch.create', $user_id) }}" role="button"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Create new switch</a></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>	
			</tbody>
		</table>
	</div>
</div>	
@stop

@section('breadcrumbs')
<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
<li class="active">{{ HTML::linkRoute('user.switch.index', 'Your Switches', $user_id) }}"></li>
@stop