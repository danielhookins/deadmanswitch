<?php namespace App\Http\Controllers;
use Carbon\Carbon;

class HomeController extends Controller {


	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "dashboard" for users that
	| are authenticated.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		//update 'last_active' in DB
		$date = Carbon::now();

		$user = \App\User::find(\Auth::user()->id);
		$user->last_active = $date;
		$user->save();

		$switches = \App\DMSwitch::where('user_id', $user->id)->get();

		return view('home', array('switches' => $switches));
	}

}
