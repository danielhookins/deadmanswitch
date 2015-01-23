<?php $user_id = Auth::user()->id; ?> 

@extends('layouts.dashboard')

@section('title')
New Switch
@stop 

@section('styles')
<link href="{{ asset('_/css/switch.css') }}" rel="stylesheet">
@stop

@section('main-content')
<h2>New Switch</h2>
<p>Create a new switch.</p>
@stop

@section('breadcrumbs')
<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
<li>{{ HTML::linkRoute('user.switch.index', 'Your Switches', $user_id) }}</li>
<li class="active">{{ HTML::linkRoute('user.switch.create', 'New Switch', $user_id) }}"></li>
@stop