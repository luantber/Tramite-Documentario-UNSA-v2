<?php


Route::get('/', function () {
    return view('home');
});


/*Route::get('crear/{nombre}','personasController@create');*/

//ALGUNAS RUTAS DISPONIBLES----------------------

// GRUPO USUARIOS **usuarios/

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('/',function(){return view('Persona.todos');});
	Route::get('crear',function(){return view('Persona.crear');}); //usuarios/crear
	Route::post('crear','personasController@create');
	Route::get('test','personasController@test');
});

//GRUPO EMPLEADOS **empleados/encontrar....empleados/crear
Route::group(['prefix'=>'empleados'],function(){

	Route::get('encontrar','personasController@encontrarPersonas');//empleados/encontrar

	Route::get('crear',function(){return view('empleados/crearEmpleado');});//empleados/crear
	Route::post('crearE','empleadosController@create');

	Route::get('crear_nuevo',function(){	return view('empleados/crearNewEmpleado');});//empleados/crear_nuevo
	Route::post('crearNewEmple','empleadosController@createNew');
});


//GRUPO CARGOS **cargos/
Route::group(['prefix'=>'cargos'],function(){

	Route::get('crear',function(){return view('crearCargo');});//cargos/crear
	Route::post('crearCar','cargosController@crear');

	Route::get('editar',function(){return view("editarCargo");});
	Route::post("editarCar","cargosController@editar");

	Route::get('eliminar','cargosController@eliminar');

	Route::get('mostrar','cargosController@mostrar');
});



//Solo para ver vistas :'v 

Route::get('login', function () {
    return view('login');
});

Route::get('personas/ver',function(){
	return view('personas/verTodos');
});

Route::get('tramites/todos',function(){
	return view('tramites/verTramites');
});

Route::get('movimientos',function(){
	return view('movimientos/verMovimientos');
});

Route::get('tramites/crear',function(){
	return view('tramites/crearTramite');
});

Route::get('areas/crear',function(){
	return view('areas/crearArea');
});

Route::get('areas/editar', function(){
  return  view('areas/editarArea');
});

Route::get('prub',function(){
	dd(App\Area::find(1)->tramites);
});
