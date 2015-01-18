<?php

// DEBUGGING: Display detected environment and connected database
// echo "Environment: ".App::environment()."<br>Database: ".DB::connection()->getDatabaseName();

Route::get('/coming-soon', function() 
{
	return View::make('coming-soon');
});

Route::get('/', 'HomeController@showWelcome');

Route::post('/signup', 'SignupController@doSignup');
Route::post('/checkin', 'CheckinController@doCheckin');
Route::get('/logout', function()
{
	Auth::logout();
	return Redirect::to('/')->with('message', 'You have logged out.');	//TODO: Build nice logged out page.
});	//TODO: Move to controller.

Route::get('/dashboard', 'DashboardController@showDashboard');