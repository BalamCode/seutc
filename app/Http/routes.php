<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('grupos',function()
{
	$grupos=App\Grupo::All();
	return view('grupos.index',["grupos"=>$grupos]);
});

Route::get('alumnos',function()
{
	return view ('alumnos.index');
});