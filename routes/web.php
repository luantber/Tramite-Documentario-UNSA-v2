<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('crear/{nombre}','personasController@create');*/

Route::group(['prefix'=>'grupo'],function(){
	Route::get('encontrar','personasController@encontrarPersonas');
});

Route::get('encontrar','personasController@encontrarPersonas');


Route::get('crearPersona',function(){
	return view('crearPersona');
});
Route::post('crear','personasController@create');



Route::get('crearEmpleado',function(){
	return view('crearEmpleado');
});
Route::post('crearE','empleadosController@create');


Route::get('crearNewEmpleado',function(){
	return view('crearNewEmpleado');
});

Route::post('crearNewEmple','empleadosController@createNew');


Route::get('encontrar','personasController@encontrarPersonas');