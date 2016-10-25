<?php


Route::get('/', function () {
    return view('welcome');
});


/*Route::get('crear/{nombre}','personasController@create');*/

//ALGUNAS RUTAS DISPONIBLES----------------------

// GRUPO USUARIOS

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('crear',function(){return view('crearPersona');}); //usuarios/crear
	Route::post('creado','personasController@create');
});

//GRUPO PEMPLEADOS **empleados/encontrar....empleados/crear 
Route::group(['prefix'=>'empleados'],function(){

	Route::get('encontrar','personasController@encontrarPersonas');//empleados/encontrar
	
	Route::get('crear',function(){return view('crearEmpleado');});//empleados/crear
	Route::post('creado','empleadosController@create');

	Route::get('crear_nuevo',function(){	return view('crearNewEmpleado');});//empleados/crear_nuevo
	Route::post('crearNewEmple','empleadosController@createNew');


});

