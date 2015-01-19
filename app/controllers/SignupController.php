<?php

class SignupController extends BaseController {

	public function doSignup()
	{
		
		// Validate input data
		$rules = array(
			'name' => 'required|min:6|max:127',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6'
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
		    return Redirect::to('/')->withErrors($validator);
		}

		// Create new user
		$user = new User;
		$user->email 		= Input::get('email');
		$user->full_name 	= Input::get('full_name');
		$user->password   	= Hash::make(Input::get('password'));
		$user->last_login	= \Carbon\Carbon::now();
		$user->save();

		$userEmail = Input::get('email');

		return "User registered with ".$userEmail; //TODO: change to message on new Dashboard
	}

}