@extends('template')

@section('title','Notas en Agenda')

@section('content')



<form method="POST" action="{{asset('notas/todos')}}">
  {{ csrf_field()}}


  <div class="container">

    <ul class="nav nav-tabs">

      <li class="active"><a href="#Personales" data-toggle="tab"> Personales </a><li>
      <li><a href="#Area" data-toggle="tab"> Area </a><li>

    </ul>

    <div class="tab-content">

      <div class="tab-pane fade in active" id="Personales">

          <br>
          <div class="container bootstrap snippet">
              <div class="row">
                <ul class="notes">

                    @foreach($personal as $nota)
                        <li>
                            <div class="rotate-1 lazur-bg">
                                <small>{{$nota->created_at}}</small>
                                <h4>{{$nota->nombre}}</h4>
                                <p>{{$nota->descripcion}}</p>

                                <a href="#" class="text-danger pull-left"><i class="fa fa-pencil-square-o "></i></a>
                                <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                            </div>
                        </li>
                      @endforeach

              </ul>
            </div>

            <div class="row  col-md-offset-9">
                {{$personal->render()}}

            </div>

          </div>




      </div>

      <div class="tab-pane fade" id="Area">

        <br>
        <div class="container bootstrap snippet">
            <div class="row">
              <ul class="notes">

                @foreach($publico as $nota)
                    <li>
                        <div class="rotate-1 lazur-bg">
                            <small>{{$nota->created_at}}</small>
                            <h4>{{$nota->nombre}}</h4>
                            <p>{{$nota->descripcion}}</p>

                            @if ($nota->empleados_id == Auth::user()->empleado->id)
                              <a href="#" class="text-danger pull-left"><i class="fa fa-pencil-square-o "></i></a>
                            @endif

                            <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                  @endforeach

            </ul>
          </div>

          <div class="row  col-md-offset-9">
            {{$publico->render()}}

          </div>


        </div>


      </div>

    </div>

  </div>
</form>



@endsection
