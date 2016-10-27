<?php


Route::get('/', function () {
    return view('home');
});


/*Route::get('crear/{nombre}','personasController@create');*/

//ALGUNAS RUTAS DISPONIBLES----------------------

// GRUPO USUARIOS **usuarios/

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('/',function(){return view('personas.todos');});
	//Route::get('crear',function(){return view('Persona.crear');}); //usuarios/crear
	Route::get('crear',function(){return view('personas.crear');}); //usuarios/crear
	Route::post('crear','personasController@create');
	Route::get('test','personasController@test');
});

//GRUPO EMPLEADOS **empleados/encontrar....empleados/crear
Route::group(['prefix'=>'empleados'],function(){

	Route::get('encontrar','personasController@encontrarPersonas');//empleados/encontrar

	Route::get('crear_nuevo',function(){return view('empleados/crearEmpleado');});//empleados/crear_nuevo
	Route::post('crearE','empleadosController@create');

	Route::get('crear',function(){	return view('empleados/crear');});//empleados/crear
	Route::post('crearNewEmple','empleadosController@createNew');
});


//GRUPO CARGOS **cargos/
Route::group(['prefix'=>'cargos'],function(){

	Route::get('crear',function(){return view('cargos.crear');});//cargos/crear
	Route::post('crearCar','cargosController@crear');

	Route::get('editar',function(){return view("cargos.editar");});
	Route::post("editarCar","cargosController@editar");

	Route::get('eliminar','cargosController@eliminar');

	Route::get('mostrar',function(){return view("cargos/mostrar");});  //cargos/mostrar
	Route::post('mostrarCar','cargosController@mostrar');
});



//Solo para ver vistas :'v 

Route::get('login', function () {
    return view('login');
});

Route::get('personas/ver',function(){
	return view('personas/todos');
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
