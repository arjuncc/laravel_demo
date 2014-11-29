<?php

class InsertController extends BaseController {

   /**
	*Used to insert data into table using model
	*/
	public function insert()
	{
		/** to get data from url*/
		$params = Input::all();
		/** Data from query string */
		$emailId = $params['emailId'];
		/** Data for user as array*/
		$userData = array( 'name'=>'Test Name','email'=>$emailId);
		/** used to insert data into user table*/
		User::create($userData);
		/** Returning data as JSON*/
		return Response::json($userData,200);
	}

}
