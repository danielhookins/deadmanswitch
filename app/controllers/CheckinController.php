<?php

class CheckinController extends BaseController {

	public function doCheckin()
	{
		
		// DEBUG: dump data
		$input = Input::all();
		dd($input);
	}

}