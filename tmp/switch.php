<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Message Input</title>
		<link href="_/css/bootstrap.css" rel="stylesheet">
		<link href="_/css/switches.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				
					<div class="message-input-vertical">
						<h2>Switch</h2>
						<form>
						  <div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="To Email">
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subject">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" rows="10"></textarea>
						  </div>
						  <div class="form-group form-inline">
							<button type="submit" class="btn btn-primary">Submit</button>
							<div class="btn-group pull-right" data-toggle="buttons">
							  <label class="btn btn-default active">
								<input type="radio" name="options" id="option1" autocomplete="off" checked>Active
							  </label>
							  <label class="btn btn-default">
								<input type="radio" name="options" id="option2" autocomplete="off"> Disabled
							  </label>
							</div>
						  </div>
						</form>
					</div>
					
				</div>
				
				<div class="col-md-6">
					<div class="message-input-horizontal">
						<h2>Switch</h2>
						<form class="form-horizontal">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">To Email</label>
							<div class="col-sm-10">
							  <input type="email" class="form-control" id="inputEmail3" placeholder="Enter email to send to">
							</div>
						  </div>
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="inputEmail3" placeholder="Enter a description">
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-12">
							  <textarea class="form-control" rows="10"></textarea>
						    </div>
						  </div>
						  <div class="form-group col-md-12 form-inline">
							<button type="submit" class="btn btn-primary">Submit</button>
							<div class="btn-group pull-right" data-toggle="buttons">
							  <label class="btn btn-default active">
								<input type="radio" name="options" id="option1" autocomplete="off" checked>Active
							  </label>
							  <label class="btn btn-default">
								<input type="radio" name="options" id="option2" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Tooltip on top"> Disabled
							  </label>
							</div>
						  </div>
						</form>
					</div>
				</div>
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		
		<script src="_/js/bootstrap.js"></script>
		<script src="_/js/message-input.js"></script>
	</body>
</html>