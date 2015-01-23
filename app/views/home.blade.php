@extends('layouts.dashboard')

@section('title')
Dashboard
@stop 

@section('styles')
<link href="{{ asset('_/css/dashboard.css') }}" rel="stylesheet">
@stop

@section('main-content')
@stop

@section('breadcrumbs')
<li class="active"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
@stop