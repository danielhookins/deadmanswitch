<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SwitchController extends Controller {

	//TODO: Documentation
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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$switches = \App\DMSwitch::where('user_id', \Auth::user()->id)->get();

        return view('switches.list', array('switches' => $switches));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('switches.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//TODO: Ensure validation

        $switch = \App\DMSwitch::create([
	        'title' => \Input::get('title'), 
	        'text' => \Input::get('text'), 
	        'user_id' => \Auth::user()->id
        ]);
        
		return redirect('/')
			->with('Switch', 'Your Switch has been saved!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$switch = \App\DMSwitch::findOrFail($id);

		if ($switch->user_id == \Auth::user()->id) {
			return view('switches.show')
            ->with('switch', $switch);
		}

		return redirect('home');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$switch = \App\DMSwitch::findOrFail($id);

		if ($switch->user_id == \Auth::user()->id) {
			return view('switches.edit')
			->with('switch', $switch);
		}

		return redirect('home');

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//TODO: Ensure validation

        $switch = \App\DMSwitch::find($id);
        
		$switch->title = \Input::get('title');
		$switch->text = \Input::get('text'); 
	    $switch->save();
        
		return redirect('/')
			->with('switch', 'Your Switch has been saved!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        //Use delete function below
        
	}

	public function delete($id)
	{
		//TODO: add warnings 
		$switch = \App\DMSwitch::findOrFail($id);

		if ($switch->user_id == \Auth::user()->id) {
			\App\DMSwitch::destroy($id);

			return redirect('home')
			->with('switch', 'Your Switch has been deleted!');
		}

		return redirect('home');
	}

}
