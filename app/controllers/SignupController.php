<?php

class SignupController extends BaseController {

	public function doSignup()
	{
		$user = new User;
		$user->email 		= Input::get('email');
		$user->full_name 	= Input::get('full_name');
		$user->password   	= Hash::make(Input::get('password'));
		$user->last_login	= \Carbon\Carbon::now();
		$user->save();

		$userEmail = Input::get('email');

		return "User registered with ".$userEmail;
	}

}