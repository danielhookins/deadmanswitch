<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dead Man Switch - @yield('title')</title>
		<link href="{{ asset('_/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('_/css/checkin-signup.css') }}" rel="stylesheet">
		<link href="{{ asset('http://fonts.googleapis.com/css?family=Lato|Alegreya:400,700') }}" rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="wrapper">
			<!-- MESSAGES -->
			<section id="messages">
				@if (Session::has('message'))
					<div class="alert alert-info alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <p>{{ Session::get('message'); }}</p>
					</div>
				@endif
				@if ($errors)
					@if ($errors->has())
			        <div class="alert alert-warning alert-dismissible" role="alert">
				  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			            <strong>Oops... </strong> 
			            @foreach ($errors->all() as $error)
			                {{ $error }}<br>        
			            @endforeach
			        </div>
			        @endif
				@endif
			</section> <!-- /.MESSAGES -->
			<!-- MAIN -->
			<section id="main">
				<div class="container main-content">
					<div class="row">
						<div class="col-md-6">
							@yield('left-column-content')
						</div>
						<div class="col-md-6">
							@yield('right-column-content')
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