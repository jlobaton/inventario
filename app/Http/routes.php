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

Route::get('/formulario', 'FormularioController@index');
//Route::get('/configuracion', 'ConfiguracionController@index');
/*Route::get('/configuracion', function(){
	return "hola mundo";
});*/
Route::controller('formulario', 'FormularioController');
Route::controller('configuracion', 'ConfiguracionController');
/*
Route::get('jesus', function()
{
	return View::make('configuracion');
});
*/
