
<div class="row">
  <ul class="notes">

    @foreach($publico as $nota)
        <li>
            <div class="rotate-1 lazur-bg">
              <small>Fecha: {{$nota->created_at}}
                <br>
                      Autor: {{$nota->nombreE.' '.$nota->apellido}}
              </small>
                <br>
                <h4>{{$nota->nombreN}}</h4>
                <p>{{$nota->descripcion}}</p>

                @if ($nota->empleados_id == Auth::user()->empleado->id)
                  <a href="{{asset('notas')}}{{'/'.$nota->id.'/editar'}}" class="text-danger pull-left"><i class="fa fa-pencil-square-o "></i></a>
                @endif

                @if ($nota->empleados_id == Auth::user()->empleado->id)
                <a href="{{asset('notas')}}{{'/'.$nota->id.'/eliminar'}}" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>                             @endif


            </div>
        </li>
      @endforeach

</ul>
</div>

<div class="row">
{{$publico->render()}}

</div>
