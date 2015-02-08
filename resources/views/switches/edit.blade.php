@extends('layouts.app')

@section('title')
	Edit: {{ $switch->title }}
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<div class="panel panel-default">
				  <div class="panel-heading">Edit Switch</div>
				  <div class="panel-body">
				  	{!! Form::model($switch, array('route' => array('switch.update', $switch->id), 'method' => 'PUT')) !!}
					  <div class="form-group">
						{!! Form::text('title', Input::old('title'), array('id'=>'title', 'class'=>'form-control', 'required'=>'required')) !!}
					  </div>
					  <div class="form-group">
						{!! Form::textarea('text', Input::old('text'), array('id'=>'text', 'class'=>'form-control', 'required'=>'required', 'rows'=>'10', 'autofocus'=>'autofocus')) !!}
					  </div>
					  <div class="form-group form-inline">
						{!! Form::submit('Update switch', ['class'=>'btn btn-success']) !!}
						<a class="btn btn-danger" href="javascript:history.go(-1)">Cancel</a>
					  </div>
					{!! Form::close() !!}
					</div><!--/panel-body -->
				</div><!--/panel-->
				
			</div> <!-- /col-md-9 -->
		</div> <!-- /row -->
	</div> <!-- /container -->
@stop
