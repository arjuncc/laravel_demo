<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		/** Used to get the details from client*/
	//	$varc = Input::all();
	//	$xxx = $varc['input name'];
		
		
		
		$cc = array( 'name'=>'hello cc','email'=>'hello@wr.com');
		
		//User::create($cc);
		
		$result = User::all()->toArray();
		
		//print_r($result);
		
		/** json response*/
		return Response::json($result,200);
		//return View::make('letmesee',$cc);
	}

}
