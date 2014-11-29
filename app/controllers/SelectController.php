<?php

class SelectController extends BaseController {

   /**
	*Used to select data from table
	*/
	public function select()
	{
		/** To get all data from user table*/
		$result = User::all()->toArray();
		/** json response*/
		return Response::json($result,200);
	}

}
