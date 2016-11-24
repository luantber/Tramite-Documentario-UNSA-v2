@extends('template')

@section('title','Ver Trámites')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
@endsection

@section('content')

<h2><p class="text-center">  Ver Trámites </p></h2>
	<br>



<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#todos">Todos</a></li>
  <li><a data-toggle="tab" href="#proceso">En Proceso</a></li>
  <li><a data-toggle="tab" href="#finalizados">Finalizados</a></li>
</ul>

<div class="tab-content">
  <div id="todos" class="tab-pane fade in active">
  </div>

  <div id="proceso" class="tab-pane fade">
  </div>

  <div id="finalizados" class="tab-pane fade">
  </div>

</div>



<script>
var TablaTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaTramites.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTramites url="{{asset('tramites/todos')}}"  base="{{asset('tramites')}}" refresh="5000" />,
	document.getElementById('todos')
);

ReactDOM.render(
	<TablaTramites url="{{asset('tramites/todos/activo')}}" base="{{asset('tramites')}}" refresh="5000" />,
	document.getElementById('proceso')
);


ReactDOM.render(
	<TablaTramites url="{{asset('tramites/todos/final')}}" base="{{asset('tramites')}}" refresh="5000" />,
	document.getElementById('finalizados')
);

</script>


@endsection
