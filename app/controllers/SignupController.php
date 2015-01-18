<?php

class SignupController extends BaseController {

	public function doSignup()
	{
		
		// DEBUG: dump data
		$input = Input::all();
		dd($input);
	}

}