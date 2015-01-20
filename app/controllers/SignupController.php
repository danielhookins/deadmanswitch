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
		    return Redirect::to('/')
		    	->withErrors($validator)
		    	->withInput(Input::except('password'));
		}

		// Create new user
		$user = new User;
		$user->email 		= Input::get('email');
		$user->name 		= Input::get('name');
		$user->password   	= Hash::make(Input::get('password'));
		$user->last_login	= \Carbon\Carbon::now();
		$user->save();
		
		$successMsg = 'You have registered with the email address '.Input::get('email');			

		Auth::login($user);

		return Redirect::to('/dashboard')->with('message', $successMsg);
	}

}