<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard - Tables</title>
		<link href="_/css/bootstrap.css" rel="stylesheet">
		<link href="_/css/dashboard.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato|Alegreya:400,700' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		
		<div class="wrapper">
		
			<!--TOP-BAR -->
			<section id="top-bar">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<div class="navbar-header">
						<div class="logo">
							<h1><a href="index.php">DMS</a></h1>
						</div>
					</div>
				  <p class="navbar-text">Hello there {{ Auth::user()->name. [ <a href="{{ URL::to('/logout') }}">Log out</a> ]</p>
				  </div>
				</nav>
			</section> <!-- /.TOP-BAR -->
		
		
			<div class="container"> 
				<div class="row full-row">
				<div class="col-md-12">
					
					<!--LEFT-BAR -->
					<div id="left-bar" class="col-md-3 sidebar-col">
						<div class="list-group">
						  <a href="index.php" class="list-group-item">
							<h4 class="list-group-item-heading">Dashboard</h4>
						    <p class="list-group-item-text">A summary of your app data</p>
						  </a>
						  <a href="basic.php" class="list-group-item active">
							<h4 class="list-group-item-heading">Switches</h4>
							<p class="list-group-item-text">This is just your stock-standard basic table.</p>
						  </a>
						  <a href="striped.php" class="list-group-item">
							<h4 class="list-group-item-heading">Messages</h4>
							<p class="list-group-item-text">This table has striped rows so you can read the content easier.</p>
						  </a>
						  <a href="bordered.php" class="list-group-item">
							<h4 class="list-group-item-heading">Settings</h4>
							<p class="list-group-item-text">This table has a light rounded border.</p>
						  </a>
						</div>
					</div><!-- /.LEFT-BAR -->
					
					<!--MAIN-CONTENT -->
					<div id="main-content" class="col-md-8 main-col">
						<ol class="breadcrumb">
						  <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="index.php">Dashboard</a></li>
						  <li class="active"><a href="#">Switches</a></li>
						</ol>	

						<p>T-bone ground round doner shoulder corned beef kielbasa spare ribs tail. Pork belly shank rump sirloin hamburger.</p>
					
						<div class="hover-table">
							<h2 id="tables-hover-rows">Switches</h2>
							<p>Here are all of your active and inactive switches.</p>
							<div class="bs-example" data-example-id="hoverable-table">
								<table class="table table-hover">
									<thead>
										<tr>
											<th></th>
											<th>Label</th>
											<th>To Email</th>
											<th>Status</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row"></th>
											<td>Test message</td>
											<td>danhookins@gmail.com</td>
											<td><a href="#">Active</a></td>
											<td>[<a href="#">edit</a>]</td>
											<td>[<a href="#">delete</a>]</td>
										</tr>
									</tbody>
								</table>
							</div>	
						</div>	
					</div><!-- /.MAIN-CONTENT -->
			
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
		</footer> <!-- /.FOOTER-BAR -->

		<script src="_/js/bootstrap.js"></script>
		<script src="_/js/dashboard.js"></script>
	</body>
</html>