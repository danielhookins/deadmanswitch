@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Reset</strong> Password</div>
				<div class="panel-body">

					<form class="form-horizontal" role="form" method="POST" action="/password/reset">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="token" value="{{ $token }}">
						<div class="col-md-12">
							
							<div class="form-group">
								<label class="sr-only control-label">Email address</label>
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email address">
							</div>

							<div class="form-group">
								<label class="sr-only control-label">New password</label>
								<input type="password" class="form-control" name="password" placeholder="New password">
							</div>

							<div class="form-group">
								<label class="sr-only control-label">Confirm password</label>
								<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">
									Reset Password
								</button>
							</div>

						</div><!--/col-md-12-->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
