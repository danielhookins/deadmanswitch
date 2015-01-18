<?php

class DashboardController extends BaseController {

	public function showDashboard()
	{
		if(Auth::check()) 
		{
			return View::make('dashboard');
		}
		return Redirect::to('/')->with('message', 'You must log in first.');
	}

}