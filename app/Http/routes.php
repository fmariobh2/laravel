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
    return view('empleados/index');
});

Route::get('/empleados/create', 'EmpleadosController@create');
Route::get('/empleados/find', 'EmpleadosController@find');
Route::post('/empleados/find', 'EmpleadosController@findEmpleado');
Route::get('/empleados/{id}', 'EmpleadosController@show');
Route::get('/empleados', 'EmpleadosController@index');
Route::post('/empleados', 'EmpleadosController@store');


