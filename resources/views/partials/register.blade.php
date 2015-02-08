<div class="panel panel-default">
	<div class="panel-heading"><strong>I'm new.</strong> Register</div>
	<div class="panel-body">

		<form class="form-horizontal" role="form" method="POST" action="/auth/register">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="col-md-12">
				<div class="form-group">
					<label class="sr-only control-label">Name</label>
					<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your full name">
				</div>

				<div class="form-group">
					<label class="sr-only control-label">Email Address</label>
					<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
				</div>

				<div class="form-group">
					<label class="sr-only control-label">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>

				<div class="form-group">
					<label class="sr-only control-label">Confirm Password</label>
					<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success">
						Register with Dead Man Switch
					</button>
				</div>
			</div>
		</form>
	</div>
</div>