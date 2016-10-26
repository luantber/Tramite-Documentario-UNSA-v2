<?php


Route::get('/', function () {
    return view('welcome');
});


/*Route::get('crear/{nombre}','personasController@create');*/

//ALGUNAS RUTAS DISPONIBLES----------------------

// GRUPO USUARIOS **usuarios/

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('crear',function(){return view('crearPersona');}); //usuarios/crear
	Route::post('crear','personasController@create');
});

//GRUPO EMPLEADOS **empleados/encontrar....empleados/crear 
Route::group(['prefix'=>'empleados'],function(){

	Route::get('encontrar','personasController@encontrarPersonas');//empleados/encontrar
	
	Route::get('crear',function(){return view('crearEmpleado');});//empleados/crear
	Route::post('crearE','empleadosController@create');

	Route::get('crear_nuevo',function(){	return view('crearNewEmpleado');});//empleados/crear_nuevo
	Route::post('crearNewEmple','empleadosController@createNew');
});


//GRUPO CARGOS **cargos/
Route::group(['prefix'=>'cargos'],function(){

	Route::get('crear',function(){return view('crearCargo');});//cargos/crear
	Route::post('crearCar','cargosController@crear');

	Route::get('editar',function(){return view("editarCargo");});
	Route::post("editarCar","cargosController@editar");

	Route::get('eliminar','cargosController@eliminar');
});
