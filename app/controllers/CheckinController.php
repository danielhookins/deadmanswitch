<?php

class CheckinController extends BaseController {

	public function doCheckin()
	{
	
		if (Auth::attempt(Input::only('email', 'password'))) 
		{
			return View::make('dashboard');
		}

		return Redirect::to('/')
            ->withErrors('Wrong username or password.')
            ->withInput(Input::except('password'));
	}

}