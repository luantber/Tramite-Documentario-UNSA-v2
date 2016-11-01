@extends('template')

@section('title','Eliminar Cargo')

@section('content')

<form method="post" action="{{asset('cargos/eliminar')}}">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
<input type="text" name="id" value="{{$eliminado->id}}">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Cargo: {{ $eliminado->nombreCargo }}</h3>
          </div>
        </div>
        
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nombre de Cargo: </td>
                    <td>{{$eliminado->nombreCargo}}</td>
                  </tr>
                  <tr>
                    <td>Descripción: </td>
                    <td>{{$eliminado->descripcion}}</td>
                  </tr>                     
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>

      <div class="text-center">
			<button type="submit" class="btn btn-info btn-lg" value="" data-toggle="modal" data-target="#Eliminar">Eliminar</button>
      </div>
<!--
		<div id="Eliminar" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Eliminar</h4>
		      </div>
		      <div class="modal-body">
		        <p>¿Está seguro que desea eliminar este cargo?</p>
		      </div>
		      <div class="modal-footer">
		      	<button type="button" value="submit" class="btn btn-default" data-dismiss="modal">Sí</button>
		        <button type="button" value="" class="btn btn-default" data-dismiss="modal">No</button>
		      </div>
		    </div>
		  </div>
		</div>
-->


    	<ul class="pager">
	        <li><a href="#">Cancelar</a></li>
	    </ul>

    </div>
</form>

@endsection
