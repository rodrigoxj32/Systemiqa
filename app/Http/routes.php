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

/*Route::get('/', function () {
    return view('home.home');
});

Route::get('login', function () {
    return view('login.login');
});

Route::get('home', function () {
    return view('home.home');
});*/

/*Route::group(['prefix' => 'mat'], function(){
	Route::resource('Pnotas', 'PorcentajeNotasController');
	Route::get('Pnotas/{id}/destroy',[
		'uses' => 'PorcentajeNotasController@destroy', //uses va por default para que reconosca la ruta
		'as' => 'mat.Pnotas.destroy'
		]);

});*/

Route::get('elejirCarrera', 'PorcentajeNotasController@create');
Route::post('guardar', 'PorcentajeNotasController@show');

Route::post('store',[
		'uses' => 'PorcentajeNotasController@store', //uses va por default para que reconosca la ruta
		'as' => 'Pnotas.create2'
		]);

Route::get('verPorcentajes',[
		'uses' => 'PorcentajeNotasController@index', //uses va por default para que reconosca la ruta
		'as' => 'Pnotas.index'
		]);

Route::get('verPorcentajes/{id}/destroy',[
		'uses' => 'PorcentajeNotasController@destroy', //uses va por default para que reconosca la ruta
		'as' => 'Pnotas.destroy'
		]);


Route::get('editar/{Pnotas}/edit',[
		'uses' => 'PorcentajeNotasController@edit', //uses va por default para que reconosca la ruta
		'as' => 'Pnotas.edit'
		]);

Route::put('cambiar/{Pnotas}',[
		'uses' => 'PorcentajeNotasController@update', //uses va por default para que reconosca la ruta
		'as' => 'Pnotas.update'
		]);

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
