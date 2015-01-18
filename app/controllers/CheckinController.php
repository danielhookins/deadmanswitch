<?php

class CheckinController extends BaseController {

	public function doCheckin()
	{
	
		if (Auth::attempt(Input::only('email', 'password'))) 
		{
			return View::make('dashboard');
		}
		return Redirect::to('/')->with('message', 'Wrong username or password.');
	}

}