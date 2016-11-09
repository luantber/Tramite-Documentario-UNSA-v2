@extends('template')

@section('title','Eliminar Nota')

@section('content')


<form method="POST" action="{{asset('notas/eliminar')}}">
  {{ csrf_field()}}
  <input type="hidden" name="id" value="{{$eliminado->id}}">

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Nota: Eliminar</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                    <tr>
                      <td>Nombre : </td>
                      <td>{{$eliminado->nombre}}</td>
                    </tr>
                    <tr>
                      <td>Descripción: </td>
                      <td>{{$eliminado->descripcion}}</td>
                    </tr>
                    <tr>
                      <td>Privacidad: </td>
                      @if($eliminado->personal == 1)
                        <td>Personal</td>
                      @else
                        <td>Público</td>
                      @endif

                    </tr>                    
                  </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>


      <div class="text-center">
        <button type="submit" class="btn btn-info btn-lg" value="" data-toggle="modal" data-target="">Eliminar</button>
      </div>

      <ul class="pager">
            <li><a href="{{asset('notas')}}{{'/'.$eliminado->id}}">Cancelar</a></li>
      </ul>

    </div>



</form>


@endsection



