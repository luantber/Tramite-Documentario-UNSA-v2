@extends('template')

@section('title','Editar Nota')

@section('content')

<h2><p class="text-center">  Editar Área </p></h2>

    <br><br>
    <form method="POST" action="{{ asset('notas')}}{{'/'.$nota->id}}">
    {{ csrf_field()}}

          <div class="row">

            <div class="col-sm-12">
          <label for="nombre"> Nombre de la Nota: </label>
          <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
              </span>
              <input type="text" class="form-control"name="nombre" id="nombre" value="{{$nota->nombre}}">
            </div>
          </div>
        </div>
      <div class="form-group">
          <label for="Descripcion"> Descripción: </label>
            <input class="form-control" value="{{ $nota->descripcion }}"  name="descripcion" id="descripcion" required="">
        </div>

        <div class="text-center">
            <button type="submit" value="Submit" class="btn btn-primary">Guardar</button>
        </div>

        <ul class="pager">
            <li><a href="{{asset('notas/todos')}}{{'/'.$nota->id.'/editar'}}">Cancelar</a></li>
        </ul>

    </div>

    </form>

</form>

@endsection
