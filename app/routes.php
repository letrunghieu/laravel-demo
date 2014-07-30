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


Route::get('/{username}', function($username)
{
	$user = User::where('username', '=', $username)->first();
	if ($user)
	{
		Auth::login($user);
	}
	
	return View::make('users', ['users' => User::all()]);
});

Route::get('/', function()
{
	return View::make('hello');
});

