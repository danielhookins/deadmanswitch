<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Display detected environment and connected database for debugging
echo "Environment: ".App::environment()."<br>Database: ".DB::connection()->getDatabaseName();

Route::get('/', function()
{
	return View::make('coming-soon');
});
