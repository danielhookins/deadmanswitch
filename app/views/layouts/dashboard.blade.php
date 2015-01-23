<?php $user_id = Auth::user()->id; ?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dead Man Switch - @yield('title')</title>
		<link href="{{ asset('_/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('_/css/dashboard.css') }}" rel="stylesheet">
		<link href="{{ asset('http://fonts.googleapis.com/css?family=Lato|Alegreya:400,700') }}" rel='stylesheet' type='text/css'>
		@yield('styles')
	</head>
	<body>
		
		<div class="wrapper">
		
			<!--TOP-BAR -->
			<section id="top-bar">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<div class="navbar-header">
						<div class="logo">
							<h1><a href="{{ URL::to('/dashboard') }}">DMS</a></h1>
						</div>
					</div>
				  <p class="navbar-text">Hello there {{ Auth::user()->name }}. [ <a href="{{ URL::to('logout') }}">Log out</a> ]</p>
				  </div>
				</nav>
			</section> 
			<!-- /.TOP-BAR -->

			<div class="container"> 
				<div class="row full-row">
				<div class="col-md-12">
					
					<!--LEFT-BAR -->
					<div id="left-bar" class="col-md-3 sidebar-col">
						<div class="list-group">
						  <a href="{{ URL::to('/dashboard') }}" class="list-group-item">
							<h4 class="list-group-item-heading">Dashboard</h4>
						    <p class="list-group-item-text">Your Dead Man Switch summary.</p>
						  </a>
						  <a href="{{ URL::route('user.switch.create', $user_id) }}" class="list-group-item">
							<h4 class="list-group-item-heading">New Switch</h4>
							<p class="list-group-item-text">Create a new switch.</p>
						  </a>
						  <a href="{{ URL::route('user.switch.index', $user_id) }}" class="list-group-item">
							<h4 class="list-group-item-heading">Your Switches</h4>
							<p class="list-group-item-text">View, edit or delete your switches.</p>
						  </a>
						  <a href="{{ URL::route('user.settings.index', $user_id) }}" class="list-group-item">
							<h4 class="list-group-item-heading">Settings</h4>
							<p class="list-group-item-text">Change your user / application settings.</p>
						  </a>
						</div>
					</div>
					<!-- /.LEFT-BAR -->

					<!--MAIN-CONTENT -->
					<div id="main-content" class="col-md-8 main-col">
						<ol class="breadcrumb">
						  @yield('breadcrumbs')
						</ol>	
					@yield('main-content')
					</div> <!-- /.MAIN-CONTENT -->		
				
				</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- ./wrapper -->
		
		<!-- FOOTER-BAR -->
		<footer id="footer-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p><strong>Dead Man Switch</strong></p>
						<p>Copyright &copy; 2015 <a href="http://hookins.net">Daniel Hookins</a></p>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</footer> 
		<!-- /.FOOTER-BAR -->

		
		<!-- SCRIPTS -->
		<script src="{{ asset('_/js/bootstrap.js') }}"></script>
		<script src="{{ asset('_/js/dashboard.js') }}"></script>
	</body>
</html>