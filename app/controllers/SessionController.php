<?php

class SessionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * 
	 *
	 * 
	 */
	public function create()
	{
		//
	}


	/**
	 * Log a user into the system
	 *
	 * @return Successfully logged in user is taken to their dashboard.
	 */
	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password'))) 
		{
			return Redirect::to('/dashboard');
		}

		return Redirect::to('/')
            ->withErrors('Wrong username or password.')
            ->withInput(Input::except('password'));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

	/**
	 * Log out the specific user.
	 *
	 * @param  int  $id the users id-number
	 * @return Take to site root with 'logged out' message.
	 */
	public function logout()
	{
		Auth::logout();
		
		return Redirect::to('/')->with('message', 'You have logged out.');
	}

}
