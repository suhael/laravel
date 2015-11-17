<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

Route::get('/', function()
{
	return View::make('hello');
});

/*Route::get('/recipe', function()
{
    return View::make('recipe/list');
});
Route::get('/recipe/create', function()
{
    return View::make('recipe/form');
});*/

Route::get('recipe/listall', 'RecipeController@listall');
Route::resource('recipe', 'RecipeController',
    array('only' => array('index', 'create', 'store', 'show', 'update', 'destroy')));

Route::resource('resource/ingredient', 'IngredientController',
    array('only' => array('index', 'create', 'store', 'show', 'edit', 'update', 'destroy')));

Route::resource('resource/tag', 'TagController',
    array('only' => array('index')));

Route::resource('resource/allergy', 'AllergyController',
    array('only' => array('index')));

Route::resource('resource/mealtime', 'MealTimeController',
    array('only' => array('index')));