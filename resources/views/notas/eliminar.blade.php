@extends('template')

@section('title','Eliminar Nota')

@section('content')


<form method="POST" action="{{asset('notas/eliminar')}}">
  {{ csrf_field()}}


  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Nota</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nombre : </td>
                    <td>{{eliminado->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Descripción: </td>
                    <td>{{$elimanado->descripcion}}</td>
                  </tr>                    
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>

</form>


@endsection
