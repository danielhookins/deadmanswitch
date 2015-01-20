<?php

class CheckinController extends BaseController {

	public function doCheckin()
	{
	
		if (Auth::attempt(Input::only('email', 'password'))) 
		{
			return Redirect::to('/dashboard');
		}

		return Redirect::to('/')
            ->withErrors('Wrong username or password.')
            ->withInput(Input::except('password'));
	}

}