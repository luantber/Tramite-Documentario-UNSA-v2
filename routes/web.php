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

	//Route::get('crear',function(){return view('empleados.crear');});//empleados/crear --refiere a un empleado que no existe como usuario
	Route::get('crear','empleadosController@antesCrear');
	Route::post('crearNewEmple','empleadosController@createNew');


	Route::get('usuario',function(){return view('empleados.usuario');});//empleados/usuario -- refiere a un empleado que ya es usuario
	Route::post('EmpleadoUsu','empleadosController@create');

	Route::get('{id}', 'empleadosController@show');

	Route::get('{id}/editar','empleadosController@editar');
	Route::post('{id}','empleadosController@guardar');

	Route::get('{id}/eliminar','empleadosController@eliminar');
	Route::post('eliminar','empleadosController@eliminado');
});


//GRUPO CARGOS **cargos/
Route::group(['prefix'=>'cargos'],function(){
	Route::get('/',function(){return view('cargos.todos');});//cargos
	Route::get('todos','cargosController@todos');

	Route::get('crear',function(){return view('cargos.crear');});//cargos/crear
	Route::post('crearCar','cargosController@crear');


	Route::get('{id}/eliminar','cargosController@eliminar');
	Route::post('eliminar','cargosController@eliminado');

	Route::get('{id}/editar','cargosController@editar');
	Route::post('{id}','cargosController@guardarsss');
	
	Route::get('{id}','cargosController@show');


});


Route::group(['prefix'=>'tramites'],function(){

	Route::get('/',function(){return view('tramites/ver');});
	Route::post('/',function(){return view('tramites/ver');});
	Route::get('/todos','tramitesController@todos');

	Route::get('crear','tramitesController@createGet');
	Route::post('crear','tramitesController@create');

	Route::get('delegar',function(){return view('tramites/delegar');});
	Route::get('resolver',function(){return view('tramites/resolver');});
	Route::get('ver',function(){	return view('tramites/ver');});
	Route::post('subir','tramitesController@subirDocumento');

	Route::get('editar',function(){return view('tramites/editar');});
	Route::get('subir',function(){return view('tramites/subir');});
	Route::get('eliminar',function(){return view('tramites/eliminar');});
	Route::get('{id}','tramitesController@showTramite');
});


/* Quien Borró mis rutas de areas ¡¡ */
Route::group(['prefix'=>'areas'],function(){

  Route::get('/',function(){ return view('areas.todos');  });
  Route::get('/todos','areasController@todos');

  Route::get('crear','areasController@crearGet');
  Route::post('crear','areasController@crear');

  Route::get('{id}','areasController@show');


  Route::get('{id}/editar','areasController@editar');
  Route::post('{id}','areasController@guardar');

});





//Route::get('login', 'LoginController@login');
//Rutas de auth
Route::auth();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



