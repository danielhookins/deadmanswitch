<div class="panel panel-default">
	<div class="panel-body">

		<form class="form-horizontal" role="form" method="POST" action="/auth/login">
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<label class="sr-only control-label">Email Address</label>
				<div class="col-md-12">
					<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email address">
				</div>
			</div>

			<div class="form-group">
				<label class="sr-only control-label">Password</label>
				<div class="col-md-12">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>

			<div class="checkbox-inline">
			    <label>
			      <input type="checkbox" name="remember"> Remember Me
			    </label>
			</div>
			<div class="pull-right">
			    <a href="/password/email">Forgot Your Password?</a>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">
						Login
					</button>	
				</div>
			</div>

		</form>		
	</div>
</div>