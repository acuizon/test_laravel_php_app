<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
		$this->beforeFilter('admin');
		
	}

	public function index()
	{
		return View::make('admin.index')->with('users', User::all());
	}

}