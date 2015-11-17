<?php

class RecipeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return View::make('recipe/list');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        //return View::make('recipe/form')->with('recipe', new Recipe);
        $mealtimes = MealTime::all();
        return View::make('recipe/form')->with('mealtimes', $mealtimes);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $recipe = new Recipe;
        $recipe->title = Input::get('title');
        $recipe->save();

        return Response::json(array('success' => true));
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
        $recipe = Recipe::find($id);
        return Response::json($recipe);
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
        //$recipe = Recipe::find($id);
        //return View::make('recipe/edit')->with('recipe', $recipe);
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
        $recipe = Recipe::find($id);
        $recipe->title = Input::get('title');
        $recipe->save();
        return Response::json(array('success' => true));

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
        $recipe = Recipe::find($id);
        $recipe->delete();
        return Response::json(array('success' => true));
	}


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listall()
    {
        //
        $recipes = Recipe::all();
        return Response::json($recipes);
    }


}
?>