<?php

class CheckinController extends BaseController {

	public function doCheckin()
	{
	
		if (Auth::attempt(Input::only('email', 'password'))) 
		{
			return "Welcome ".Auth::user()->full_name;
		}
		echo "failed.";
	}

}