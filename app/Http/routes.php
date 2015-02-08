<?php

// DEBUGGING: Display detected environment and connected database
// echo "<p>Environment: ".App::environment()."<br />Database: ".DB::connection()->getDatabaseName().'</p>';

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('switch', 'SwitchController');
Route::get('switch/{id}/delete', array('as' => 'switch.delete', 'uses' => 'SwitchController@delete'));