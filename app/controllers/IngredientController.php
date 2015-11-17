<?php

class IngredientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $ingredients = Ingredient::all();
        return View::make('ingredient/list')->with('ingredients', $ingredients);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('ingredient/form')->with('ingredient', new Ingredient);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $ingredient = new Ingredient;
        $ingredient->title = Input::get('title');
        $ingredient->save();

        return Redirect::to('ingredient');
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
        $ingredient = Ingredient::find($id);
        return View::make('ingredient/show')->with('ingredient', $ingredient);
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
        $ingredient = Ingredient::find($id);
        return View::make('ingredient/edit')->with('ingredient', $ingredient);
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
        $ingredient = Ingredient::find($id);
        $ingredient->title = Input::get('title');
        $ingredient->save();
        return Redirect::to('ingredient');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
        $ingredient = Ingredient::find($id);
        $ingredient->delete();
        return Redirect::to('ingredient');
	}


}
