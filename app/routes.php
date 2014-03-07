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

// Route::get('/', array('uses' => 'HomeController@showWelcome', 'as' => 'test'));
Route::get('/', function() {
  return Redirect::to('item');
});

Route::get('sample', array('uses' => 'HomeControllers@sampleFunction', 'as' => 'wahaha'));

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('wla_lng', function()
{
  return View::make('wla_lng');
});

Route::group(array('before' => 'auth'), function()
{
  Route::resource('item', 'ItemController');

  Route::get('admin', array('before' => '', 'uses' => 'AdminController@index'));
});

Route::get('login', array('uses' => 'LoginController@index'));
Route::post('login', array('uses' => 'LoginController@doLogin'));
Route::get('logout', array('uses' => 'LoginController@logout'));
Route::get('signup', array('uses' => 'LoginController@signup'));
Route::post('register', array('uses' => 'LoginController@register'));

