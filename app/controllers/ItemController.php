<?php

class ItemController extends BaseController {

	// public function __construct()
	// {
	// 	$this->beforeFilter('auth');
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Item::all();
		return View::make('items.index', array('items' => $items));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$item = new Item;
		return View::make('items.create', array('item' => $item));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Item::create(Input::except('_token'));

		return Redirect::to(URL::route('item.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Item::find($id);

		return View::make('items.show', array('item' => $item));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Item::find($id);

		return View::make('items.edit', array('item' => $item));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$item = Item::find($id);
		$item->name = Input::get('name');
		$item->description = Input::get('description');
		$item->stock = Input::get('stock');
		$item->save();

		return Redirect::to(URL::route('item.show', $item->id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$item = Item::find($id);
		$item->delete();

		return Redirect::to(URL::route('item.index'));
	}

}