<div class="panel panel-default">
  <div class="panel-heading">New Switch</div>
  <div class="panel-body">
  	<form role="form" method="POST" action="/switch">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">

  		<div class="form-group">
				<label class="sr-only control-label">Switch title</label>
				<input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Switch title" autofocus>
		  </div>

		  <div class="form-group">
				<textarea class="form-control" name="text" rows="10">{{ old('text') }}</textarea>
		  </div>

		  <div class="form-group form-inline">
				<button type="submit" class="btn btn-success">Save</button>
				
				<!--TODO: Remove cancel button if on /home page-->
				<a class="btn btn-danger" href="javascript:history.go(-1)">Cancel</a>
		  
			  <div class="btn-group pull-right" data-toggle="buttons">
				<label class="btn btn-default active">
					<input type="radio" name="status" value="1" id="activeSwitch" autocomplete="off" checked>Active
				</label>
				<label class="btn btn-default">
					<input type="radio" name="status" value="0" id="disabledSwitch" autocomplete="off"> Disabled
				</label>
			  </div>
			</div> <!--/form-inline-->

  	</form>
	</div><!--/panel-body -->
</div><!--/panel-->