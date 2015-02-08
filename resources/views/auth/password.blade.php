@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Forgot</strong> Password</div>
				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/password/email">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					<div class="col-md-12">
						<div class="form-group">
							<label class="sr-only control-label">E-Mail Address</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email address">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								Send password reset link
							</button>
						</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
