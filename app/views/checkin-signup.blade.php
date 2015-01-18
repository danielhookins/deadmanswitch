<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dead Man Switch - Check in or Sign up</title>
		<link href="{{ asset('_/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('_/css/checkin-signup.css') }}" rel="stylesheet">
		<link href="{{ asset('http://fonts.googleapis.com/css?family=Lato|Alegreya:400,700') }}" rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="wrapper">

			<!-- MAIN -->
			<section id="main">
				<div class="container main-content">
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-9 col-md-offset-4 welcome-box">
								<h2>Nice to see you.</h2>
								<p>Check in to let the system know that everything is okay.</p>
								<p>The Dead Man Switch is a fail-safe messaging application that will send your pre-written message if you fail to check in with the system within 7 days.</p>
								<div class="text-center">
									<a class="learn-more-btn" href="#">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-7 col-md-offset-2">
									<div class="panel panel-default">
										<div class="panel-body">
											<form>
												<div class="form-group">
													<input type="email" class="form-control" id="user_email" placeholder="Enter your email">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" id="user_password" placeholder="Password">
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox"> Remember me
													</label>
												</div>
												<button type="submit" class="btn btn-primary">Check in</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-7 col-md-offset-2">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title"><strong>I'm new.</strong> Sign up</h3>
										</div>
										<div class="panel-body">
											<form>
												<div class="form-group">
													<input type="input" class="form-control" id="new_name" placeholder="Enter your name">
												</div>
												<div class="form-group">
													<input type="email" class="form-control" id="new_email" placeholder="Email">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" id="new_password" placeholder="Password">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" id="new_password_again" placeholder="Password again">
												</div>
												<button type="submit" class="btn btn-success">Sign up to create your Dead Man Switch</button>
											</form>
										</div>
									</div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- /.MAIN -->
		</div> <!-- ./wrapper -->

		<!-- FOOTER -->
		<footer>
			<!-- FOOTER-BAR -->
	        <div id="footer-bar">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">
	                        <p><strong>Dead Man Switch</strong></p>
	                        <p>Copyright &copy; 2015 <a href="http://hookins.net">Daniel Hookins</a></p>
	                    </div>
	                </div> <!-- /.row -->
	            </div> <!-- /.container -->
	        </div> <!-- /.FOOTER-BAR -->
		</footer> <!-- /.FOOTER -->

		<!-- SCRIPTS -->
		<script src="{{ asset('_/js/bootstrap.js') }}"></script>
		<script src="{{ asset('_/js/login-signup.js') }}"></script>
	</body>
</html>