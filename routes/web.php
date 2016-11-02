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

	Route::get('crear','empleadosController@antesCrear');
	Route::post('crearNewEmple','empleadosController@createNew');


	Route::get('usuario',function(){return view('empleados.usuario');});//empleados/usuario -- refiere a un empleado que ya es usuario
	Route::post('EmpleadoUsu','empleadosController@create');


	Route::get('{id}/eliminar','empleadosController@eliminar');
	Route::post('eliminar','empleadosController@eliminado');
	
	Route::get('{id}/editar','empleadosController@editar');
	Route::post('{id}','empleadosController@guardar');
	
	Route::get('{id}', 'empleadosController@show');
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

//GRUPO ESTADO EMPLEADOS

Route::group(['prefix'=>'estadosEmpleados'],function(){
	Route::get('/',function(){return view ('estadosEmpleados.todos');});
	Route::get('todos','estadoEmpleadosController@todos');

	Route::get('crear',function(){return view('estadosEmpleados.crear');});
	Route::post('crear','estadoEmpleadosController@crear');

	Route::get('{id}/eliminar','estadoEmpleadosController@eliminar');
	Route::post('eliminar','estadoEmpleadosController@eliminado');

	Route::get('{id}/editar','estadoEmpleadosController@editar');
	Route::post('{id}','estadoEmpleadosController@guardar');


	Route::get('{id}','estadoEmpleadosController@show');

});




Route::group(['prefix'=>'tramites'],function(){

	Route::get('/',function(){return view('tramites/ver');});

	Route::get('todos','tramitesController@todos');

	Route::get('crear','tramitesController@createGet');
	Route::post('crear','tramitesController@create');

	Route::get('{id}/delegar-area','tramitesController@delegarAreaV');
	Route::get('{id}/delegar-sub-area','tramitesController@delegarSubAreaV');
	Route::post('{id}/delegar-area','tramitesController@delegarArea');
	Route::get('resolver',function(){return view('tramites/resolver');});
	Route::get('ver',function(){	return view('tramites/ver');});
	//Route::post('subir','tramitesController@subirDocumento');

	Route::get('editar',function(){return view('tramites/editar');});
	Route::get('subir',function(){return view('tramites/subir');});
	Route::get('eliminar',function(){return view('tramites/eliminar');});
	Route::get('{id}','tramitesController@showTramite');

	Route::post('{id}/subir','tramitesController@subirDocumento');

	Route::get('{id}/editar','tramitesController@editarTramiteV');
	Route::post('{id}','tramitesController@guardar');

	Route::get('{id}/eliminar','tramitesController@eliminarTramiteV');
	Route::get('{id}/documentos','tramitesController@getDocumentosV');


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


Route::group(['prefix'=>'tipostramite'],function(){ 
   
  Route::get('/',function(){ return view('tiposTramite.todos');  }); 
  Route::get('todos','tiposTramiteController@todos');

  Route::get('crear','tiposTramiteController@crearGet'); 
  Route::post('crear','tiposTramiteController@crear'); 


  Route::get('{id}/editar','tiposTramiteController@editar');
  Route::get('{id}','tiposTramiteController@show');
  Route::post('{id}','tiposTramiteController@guardar');
  
}); 

Route::group(['prefix'=>'empleados/estados'],function(){
	Route::get('/crear',function(){
		return view('estadosEmpleado.crear');
	});
	Route::get('/editar',function(){
		return view('estadosEmpleado.editar');
	});
	Route::get('/eliminar',function(){
		return view('estadosEmpleado.eliminar');
	});
	Route::get('/show',function(){
		return view('estadosEmpleado.show');
	});
	Route::get('/todos',function(){
		return view('estadosEmpleado.todos');
	});
});


//Route::get('login', 'LoginController@login');
//Rutas de auth
Route::auth();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



//Solo para ver vistas :'v
/*
	GG Tu solo para vistas, si quieres verlo tiene que funcionar
	>:c :(
*/
	Route::get('/panel', function(){
		return view('tramites/panel');
	});

/*
	GG tu Prueba
*/