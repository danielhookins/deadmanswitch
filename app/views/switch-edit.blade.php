<?php 
	$user_id = Auth::user()->id; 
	$switch_id = null; //TODO: get switch ID
?> 

@extends('layouts.dashboard')

@section('title')
New Switch
@stop 

@section('styles')
<link href="{{ asset('_/css/switch.css') }}" rel="stylesheet">
@stop

@section('main-content')
<h2>Edit Switch</h2>
<p>Make changes to your switch.</p>
@stop

@section('breadcrumbs')
<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
<li>{{ HTML::linkRoute('user.switch.index', 'Your Switches', $user_id) }}</li>
<li class="active">{{ HTML::linkRoute('user.switch.edit', 'Edit Switch', $user_id, $switch_id) }}"></li>
@stop