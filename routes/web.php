<?php


Route::get('/', function () {
    return view('home');
});

//---------------------------- RUTAS DISPONIBLES ----------------------------------

// GRUPO USUARIOS **usuarios/

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('/',function(){return view('usuarios.todos');});//usuarios
	Route::get('todos','usuariosController@todos');
	Route::get('crear',function(){return view('usuarios.crear');});//usuarios/crear
	Route::post('crear','usuariosController@create');

	Route::get('{id}', 'usuariosController@show');

	Route::get('{id}/editar','usuariosController@editar');
	Route::post('{id}','usuariosController@guardar');


});

//GRUPO EMPLEADOS **empleados/encontrar....empleados/crear
Route::group(['prefix'=>'empleados'],function(){
	Route::get('/',function(){return view('empleados.todos');});//empleados
	Route::get('todos','empleadosController@todos');
	

	Route::get('crear',function(){return view('empleados.crear');});//empleados/crear --refiere a un empleado que no existe como usuario
	Route::post('crearNewEmple','empleadosController@createNew');


	Route::get('usuario',function(){return view('empleados.usuario');});//empleados/usuario -- refiere a un empleado que ya es usuario
	Route::post('EmpleadoUsu','empleadosController@create');

});


//GRUPO CARGOS **cargos/
Route::group(['prefix'=>'cargos'],function(){
	Route::get('/',function(){return view('cargos.todos');});//cargos --aqui se pueden ver todos los cargos
	Route::get('todos','cargosController@todos');

	Route::get('crear',function(){return view('cargos.crear');});//cargos/crear
	Route::post('crearCar','cargosController@crear');


//	Route::get('eliminar','cargosController@eliminar');

//	Route::get('editar',function(){return view("editarCargo");});
//	Route::post("editarCar","cargosController@editar");
});



//Solo para ver vistas :'v

Route::get('login', function () {
    return view('login');
});

Route::get('usuarios/todos',function(){
	return view('usuarios/todos');
});

Route::get('tramites/ver',function(){
	return view('tramites/ver');
});

Route::get('tramites/ver',function(){
	return view('tramites/ver');
});

Route::get('movimientos',function(){
	return view('movimientos/ver');
});

Route::get('tramites/crear',function(){
	return view('tramites/crear');
});

Route::get('tramites/delegar',function(){
	return view('tramites/delegar');
});


Route::get('tramites/resolver',function(){
	return view('tramites/resolver');
});

Route::get('areas/crear',function(){
	return view('areas/crear');
});

Route::get('areas/editar', function(){
  return  view('areas/editar');
});

Route::get('cargos/editar', function(){
  return  view('cargos/editar');
});

Route::get('cargos/todos', function(){
  return  view('cargos/todos');
});

Route::get('usuarios/editar', function(){
	return view('views/usuarios/editar');
});

Route::get('prub',function(){
	//	dd(App\Area::find(1)->tramites);

	$area=new App\Area;
	$area->nombre='gerencia';
	$area->descripcion='descripcion';
	$area->save();

	$tramite= new App\Tramite;
	$tramite->prioridad=2;
	$tramite->entregado=1;
	$tramite->area()->associate($area);
	$tramite->save();
	
	$mov= new App\Movimiento;
	$mov->tramite()->associate($area);
	$mov->areaDestino()->associate($area);
	$mov->areaRemitente()->associate($area);
	$mov->save();
	dd($mov);

});