<?php

class WelcomeController extends BaseController {

	public function showWelcome()
	{
		if (Session::has('message'))
		{
		    //echo Session::get('message');
		    // TODO: Pass $message variable to view from this controller
		}
		return View::make('welcome');
	}

}
