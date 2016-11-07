@extends('template')

@section('title','Eliminar Nota')

@section('content')


<form method="POST" action="{{asset('notas/eliminar')}}">
  {{ csrf_field()}}


  <div class="row">
      <div class="col-md-6 col-md-offset-3">

    <h2><p class="text-center">  Eliminar Nota </p></h2>
    <input type="hidden" name="id" value="{{$eliminado->id}}">
     
      <div class="container bootstrap snippet">
                  <tbody>
                      <tr>
                        <td>Nombre: </td>
                        <td>{{ $eliminado->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Nota: </td>
                        <td>{{ $eliminado->descripcion}}</td>
                      </tr>

                    </tbody>
     <div class="text-center">
      <button type="submit" class="btn btn-info btn-lg" value="" data-toggle="modal" data-target="">Eliminar</button>
      </div>




      <ul class="pager">
          <li><a href="{{asset('notas')}}{{'/'.$eliminado->id}}">Cancelar</a></li>
      </ul>

    </div>
  </div>


</form>


@endsection
