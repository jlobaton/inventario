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
Route::get('/', 'PrincipalController@index');
/*
Route::get('/', function () {
    return view('layouts.principal');
});
*/

Route::resource('/migracion', 'MigracionController');
Route::get('migracion/imagenes', [
	'uses' => 'MigracionController@imagenes',
	'as' => 'migracion.imagenes']);
Route::post('migracion/saveimagenes', [
	'uses' => 'MigracionController@saveimagenes',
	'as' => 'migracion.saveimagenes']);

Route::get('imagenes/index', [
	'uses' => 'ImagenesController@index',
	'as' => 'imagenes.index']);

//Route::controller('formulario', 'FormularioController');
Route::resource('login', 'LoginController');
Route::get('/logout', 'LoginController@logout');

//Route::controller('configuracion', 'ConfiguracionController');

//Route::resource('login','LoginController');

Route::resource('configuracion','ConfiguracionController');
Route::get('configuracion/{id}/destroy', [
	'uses' => 'ConfiguracionController@destroy',
	'as' => 'configuracion.destroy'
	]);

Route::resource('banco','BancoController');
Route::get('banco/{id}/destroy', [
	'uses' => 'BancoController@destroy',
	'as' => 'banco.destroy'
	]);

Route::get('encomienda/eliminada', 'EncomiendaController@eliminada');

Route::resource('encomienda','EncomiendaController');
Route::get('encomienda/{encomienda}/destroy', [
	'uses' => 'EncomiendaController@destroy',
	'as' => 'encomienda.destroy'
	]);

/*
Route::get('encomienda/eliminada', [
	'uses' => 'EncomiendaController@eliminada',
	'as' => 'encomienda.eliminada'
	]);
*/
Route::get('encomienda/{id}/restaurar', [
	'uses' => 'EncomiendaController@restaurar',
	'as' => 'encomienda.restaurar'
	]);

Route::get('inventario/eliminada', 'InventarioController@eliminada');
Route::get('inventario/{id}/restaurar', [
	'uses' => 'InventarioController@restaurar',
	'as' => 'inventario.restaurar'
	]);

Route::resource('inventario','InventarioController');
Route::get('inventario/{id}/destroy', [
	'uses' => 'InventarioController@destroy',
	'as' => 'inventario.destroy'
	]);


Route::resource('ordene','OrdeneController');
Route::get('ordene/{id}/destroy', [
	'uses' => 'OrdeneController@destroy',
	'as' => 'ordene.destroy'
	]);

/*
Route::group(['prefix' => 'configuracion'], function(){
	Route::resource('configuracion','ConfiguracionController');
	Route::get('configuracion/{id}/destroy', [
	'configuracion' => 'ConfiguracionController@destroy',
	'as' => 'configuracion.destroy'
	]);
});
*/
/*
Route::get('jesus', function()
{
	return View::make('configuracion');
});
*/