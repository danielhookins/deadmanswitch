<?php $user_id = Auth::user()->id; ?> 

@extends('layouts.dashboard')

@section('title')
Your Switches
@stop 

@section('styles')
@stop

@section('main-content')
<h2>Your Switches</h2>
<p>Here is a list of your switches.</p>
@stop

@section('breadcrumbs')
<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
<li class="active">{{ HTML::linkRoute('user.switch.index', 'Your Switches', $user_id) }}"></li>
@stop