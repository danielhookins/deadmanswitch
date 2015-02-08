@extends('layouts.app')

@section('title')
	{{ $switch->title }}
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
				  <div class="panel-heading">{{ $switch->title }}</div>
				  <div class="panel-body">
					<p>{{ $switch->text }}</p>
					<ul class="list-inline">
						<li>[ <a href="/switch/{{$switch->id}}/edit">Edit</a> ]</li>
				        <li>[ <a href="/switch/{{$switch->id}}/delete">Delete</a> ]</li>
					</ul>
				  </div><!--/panel-body -->
				</div><!--/panel-->
			</div> <!-- /col-md-9 -->
		</div> <!-- /row -->
	</div> <!-- /container -->
@stop
