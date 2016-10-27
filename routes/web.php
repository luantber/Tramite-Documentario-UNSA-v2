<?php


Route::get('/', function () {
    return view('home');
});


/*Route::get('crear/{nombre}','personasController@create');*/

//ALGUNAS RUTAS DISPONIBLES----------------------

// GRUPO USUARIOS **usuarios/

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('/',function(){return view('usuarios.todos');});
	
	Route::get('crear',function(){return view('usuarios.crear');});
	Route::post('crear','usuariosController@create');

	Route::get('todos',function(){return view('usuarios.todos');});
	Route::post('todos','usuariosController@todos');
});

//GRUPO EMPLEADOS **empleados/encontrar....empleados/crear
Route::group(['prefix'=>'empleados'],function(){

	Route::get('encontrar','personasController@encontrarPersonas');//empleados/encontrar

	Route::get('crear',function(){return view('empleados.crear');});//empleados/crear
	Route::post('crearNewEmple','empleadosController@create');

	Route::get('crear-nuevo',function(){	return view('empleados/crearNewEmpleado');});//empleados/crear_nuevo
	Route::post('crearNewEmple','empleadosController@createNew');

	Route::get('todos','empleadosController@todos');
	Route::get('join','empleadosController@join');
});


//GRUPO CARGOS **cargos/
Route::group(['prefix'=>'cargos'],function(){

	Route::get('crear',function(){return view('cargos.crear');});//cargos/crear
	Route::post('crearCar','cargosController@crear');

	Route::get('editar',function(){return view("cargos.editar");});
	Route::post("editarCar","cargosController@editar");

	Route::get('mostrar',function(){return view("cargos.mostrar");});
	Route::post("mostrarCar","cargosController@editar");

	Route::get('eliminar','cargosController@eliminar');

	Route::get('todos','cargosController@mostrar');
});



//Solo para ver vistas :'v 

Route::get('login', function () {
    return view('login');
});

Route::get('usuarios/todos',function(){
	return view('usuarios/todos');
});

Route::get('tramites/todos',function(){
	return view('tramites/ver');
});

Route::get('movimientos',function(){
	return view('movimientos/ver');
});

Route::get('tramites/crear',function(){
	return view('tramites/crear');
});

Route::get('areas/crear',function(){
	return view('areas/crear');
});

Route::get('areas/editar', function(){
  return  view('areas/editar');
});

Route::get('prub',function(){
	dd(App\Area::find(1)->tramites);
});
