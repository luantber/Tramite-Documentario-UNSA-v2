<?php

use App\Mail\Email;


Route::get('/', function () {
    return view('home');
});
//---------------------------- RUTAS DISPONIBLES ----------------------------------

Route::group(['prefix'=>'panel2'],function(){
	Route::get('/','panel2Controller@index');
	Route::get('todos','panel2Controller@todos');
});


Route::get('tramite/recibir','tramitesController@antesRecibir');
Route::post('tramite/recibir','tramitesController@tramiteTemporal');


Route::get('delegar/{id}','tramitesController@antesDelegar');
Route::post('delegandoAndo','tramitesController@delegandoAndo');
//---------------------------- RUTAS DISPONIBLES ----------------------------------

Route::get('turorial',function(){
	return view('tutorial.manual');
});

//Rutas a las que se debe acceder sin middleware

Route::get('{email}/activar','usuariosController@activarget');
Route::post('activar','usuariosController@activar');

Route::get('reenviar',function(){ return view('emails.reenviar');});
Route::post('reenviar','usuariosController@reenviar');

Route::get('perdida',function(){return view('usuarios.recuperar');});
Route::post('verificar','usuariosController@verificar');

//Route::get('{email}/contraseña',function(){return view('usuarios.cambiar');});

Route::post('contraseña','usuariosController@cambiar_contraseña');
Route::get('contraseña',function (){return view('usuarios.cambiar');});
Route::post('cambiar','usuariosController@cambiar');

//End Rutas sin middleware

// GRUPO USUARIOS **usuarios/

Route::group(['prefix'=>'usuarios'],function(){
	Route::get('/',function(){return view('usuarios.todos');});//usuarios
	Route::get('todos','usuariosController@todos');

	Route::get('crear',function(){return view('usuarios.crear');});//usuarios/crear
	Route::post('crearr','usuariosController@create');

	Route::get('{id}', 'usuariosController@show');

	Route::get('{id}/editar','usuariosController@editar');
	Route::post('{id}','usuariosController@guardar');
});

Route::group(['prefix'=>'empleados/estados'],function(){
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


//GRUPO EMPLEADOS **empleados/encontrar....empleados/crear
Route::group(['prefix'=>'empleados'],function(){
	Route::get('/',function(){return view('empleados.todos');});//empleados
	Route::get('todos','empleadosController@todos');

	Route::get('crear','empleadosController@antesCrear');
	Route::post('crearNewEmple','empleadosController@createNew');


	Route::get('usuarios','empleadosController@antesCrearUsu');//empleados/usuario -- refiere a un empleado que ya es usuario
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

	Route::get('{id}/permisos','cargosController@permisosget');
	Route::post('permisos','cargosController@permisos');



	Route::get('{id}/eliminar','cargosController@eliminar');
	Route::post('eliminar','cargosController@eliminado');

	Route::get('{id}/editar','cargosController@editar');
	Route::post('{id}','cargosController@guardarsss');

	Route::get('{id}','cargosController@show');


});

//GRUPO ESTADO EMPLEADOS


	//estados de tramites
	Route::group(['prefix'=>'tramites/estados'],function(){
		Route::get('/',function(){return view ('estadosTramites.todos');});
		Route::get('todos','estadosTramitesController@todos');

		Route::get('crear',function(){return view('estadosTramites.crear');});
		Route::post('crear','estadosTramitesController@crear');

		Route::get('{id}/eliminar','estadosTramitesController@eliminar');
		Route::post('eliminar','estadosTramitesController@eliminado');

		Route::get('{id}/editar','estadosTramitesController@editar');
		Route::post('{id}','estadosTramitesController@guardar');


		Route::get('{id}','estadosTramitesController@show');


	});



Route::group(['prefix'=>'tramites'],function(){

	Route::get('/',function(){return view('tramites/ver');});

	Route::get('todos/{estado?}','tramitesController@todos');

	Route::get('crear','tramitesController@createGet');
	Route::get('{dni}/crear','tramitesController@createGet2');
	Route::post('crear','tramitesController@create');


	Route::get('ver',function(){	return view('tramites/ver');});
	//Delegar empleado-area-subarea

	Route::get('{id}/delegar','tramitesController@delegarV');
	Route::post('{id}/delegar','tramitesController@delegar');
	//Route::post('subir','tramitesController@subirDocumento');


	Route::get('{id}','tramitesController@showTramite');

	Route::post('{id}/subir','tramitesController@subirDocumento');

	Route::get('{id}/editar','tramitesController@editarTramiteV');
	Route::post('{id}','tramitesController@guardar');


	Route::get('{id}/documentos','tramitesController@getDocumentosV');

	Route::get('{id}/movimientos','tramitesController@movimientosV');

	Route::get('{id}/documentos/{id2}/editar','tramitesController@documentosEditarV');
	Route::post('{id}/documentos/{id2}/editar','tramitesController@documentosEditar');

	Route::get('{id}/documentos/{id2}/eliminar','tramitesController@documentosEliminar');

	Route::get('{id}/subir','tramitesController@subirV');
	Route::get('documentos/{id}/descargar','tramitesController@descargar');


	Route::get('{id}/recibir','tramitesController@recibir');

	Route::get('{id}/cambiarEstado','tramitesController@cambiarEstadoV');
	Route::post('{id}/cambiarEstado','tramitesController@cambiarEstado');
});



Route::group(['prefix'=>'tiposDocumento'],function(){

  Route::get('/',function(){ return view('tiposDocumento.todos');  });
  Route::get('todos','tiposDocumentoController@todos');

  Route::get('crear','tiposDocumentoController@crearGet');
  Route::post('crear','tiposDocumentoController@crear');

  Route::get('{id}/editar','tiposDocumentoController@editar');

  Route::get('{id}/eliminar','tiposDocumentoController@eliminar');


  Route::get('{id}','tiposDocumentoController@show');
  Route::post('{id}','tiposDocumentoController@guardar');

});


/* Quien Borró mis rutas de areas ¡¡ */
Route::group(['prefix'=>'areas'],function(){

  Route::get('/','areasController@todosGet');
  Route::get('/todos','areasController@todos');

  Route::get('crear','areasController@crearGet');
  Route::post('crear','areasController@crear');


  Route::get('{id}/editar','areasController@editar');

  Route::get('{id}/eliminar','areasController@eliminarGet');
  Route::post('eliminar','areasController@eliminar');

  Route::get('{id}','areasController@show');
  Route::post('{id}','areasController@guardar');
});

/* tipos tramite */
Route::group(['prefix'=>'tipostramite'],function(){

  Route::get('/',function(){ return view('tiposTramite.todos');  });
  Route::get('todos','tiposTramiteController@todos');

  Route::get('crear','tiposTramiteController@crearGet');
  Route::post('crear','tiposTramiteController@crear');

  Route::get('{id}/editar','tiposTramiteController@editar');

  Route::get('{id}/eliminar','tiposTramiteController@eliminarGet');
  Route::post('eliminar','tiposTramiteController@eliminar');

  Route::get('{id}','tiposTramiteController@show');
  Route::post('{id}','tiposTramiteController@guardar');

});

/* PANEL  - POner middleware a los dos*/
Route::group(['prefix'=>'panel'],function(){
	Route::get('/','panelController@index');
	Route::get('todos','panelController@todos');
});

Route::group(['prefix'=>'panel2'],function(){
	Route::get('/','panel2Controller@index');
	Route::get('panelcito','panel2Controller@panelcito');
	Route::get('todos','panel2Controller@todos');
});



Route::group(['prefix'=>'mistramites'],function(){
	Route::get('/','panelController@indexu');
	Route::get('todos','panelController@todosu');
});
/* End Panel */


/* AGENDA She's a maniac, maniac... on the floor!!! *dances*  */
Route::group(['prefix'=>'notas'],function(){

  Route::get('/',function(){ return redirect('notas/todos');  });

  Route::get('todos','notasController@todos');


  Route::get('crear',function(){return view('notas.crear');});
  Route::post('crear','notasController@crear');


  Route::get('{id}/eliminar','notasController@eliminar');
  Route::post('eliminar','notasController@eliminado');

  Route::get('{id}','notasController@show');

  Route::get('{id}/editar','notasController@editar');
  Route::post('{id}','notasController@guardar');


});

/* FIN AGENDA */


//Route::get('login', 'LoginController@login');
//Rutas de auth
//Route::auth();
Route::get('login',function(){
	return view('auth.login');
});

Route::post('login','usuariosController@login');
Route::get('logout', 'Auth\LoginController@logout');

//Mi prueba is back


Route::group(['middleware'=>'empleado:panel','prefix'=>'pruebas'],function(){
	Route::get('/prueba', function (){
		return "Si enntras aqui el middleware esta mal, por ahora es panel";
	});
	Route::get('/shidori',function(){
		return "Que bien";

	});

});

Route::get('movimientos',function(){
	return view('tramites.movimientos');
});


Route::get('descargar/{id}',function($id){
	//$files=Storage::files(storage_path('app/public/semiFTP/'));
	//$ext=File::extension(storage_path('app/public/semiFTP/'));
	//$doc=App\Documento::find($id);
	//return dd($doc);
	//$exp=$doc->tramite->nro_expediente;
	//$files=File::files(storage_path('app/semiFTP/'.$exp));
	$files=File::files(storage_path('app/semiFTP/20160000002'));
	//return pathinfo($files[0])["basename"];
	foreach ($files as $key => $value) {
		if(pathinfo($value)["filename"]==$id)
			$file=pathinfo($value)["basename"];
	}
	if ($file)
		return response()->download(storage_path('app/semiFTP/20160000002/'.$file));
	else
		return "GG";
});

Route::get('/enviar',function(){
	$cor=new Email;
	$cor->nombre='alex';
	$cor->email='alrus2797@gmail.com';
	Mail::to('alrus2797@gmail.com')->send($cor);
});

Route::get('/mail',function(){
	return view('emails.verificar');
});


Route::get('estadisticas/parea', 'estadisticaController@areas');
Route::get('estadisticas/areaConsultar','estadisticaController@areasConsultar');
Route::get('estadisticas/pempleado','estadisticaController@empleados');
Route::get('estadisticas/empleadoConsultar','estadisticaController@empleadosConsultar');
Route::get('estadisticas/pusuario', 'estadisticaController@usuarios');
Route::get('estadisticas/usuarioConsultar','estadisticaController@usuariosConsultar');



Route::get('busqueda/porArea',function(){
	return view('busquedas/arearesultado');
});
Route::get('busqueda/resultadoArea','buscadorController@areaBusqueda');
Route::get('busqueda/porEmpleado',function(){
	return view('busquedas/empleadoresultado');
});
Route::get('busqueda/resultadoEmpleado','buscadorController@empleadoBusqueda');
Route::get('busqueda/porUsuario',function(){
	return view('busquedas/usuarioresultado');
});
Route::get('busqueda/resultadoUsuario','buscadorController@usuarioBusqueda');
Route::get('busqueda/porTramite',function(){
	return view('busquedas/tramiteresultado');
});
Route::get('busqueda/resultadoTramite','buscadorController@tramiteBusqueda');


//Solo para ver vistas :'v
/*
	GG Tu solo para vistas, si quieres verlo tiene que funcionar
	>:c :(
*/

/*
	GG tu Prueba
*/
