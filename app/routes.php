<?php

// DEBUGGING: Display detected environment and connected database
// echo "Environment: ".App::environment()."<br>Database: ".DB::connection()->getDatabaseName();

Route::get('coming-soon', function() 
{
	return View::make('coming-soon');
});
Route::get('/', 'HomeController@showWelcome');

Route::resource('session', 'SessionController');
Route::resource('user', 'UserController');
Route::resource('user.switch', 'SwitchController');

Route::get('dashboard', 'DashboardController@showDashboard');
Route::get('logout', 'SessionController@logout');