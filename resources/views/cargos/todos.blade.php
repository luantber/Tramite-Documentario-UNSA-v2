@extends('template')


@section('title','Mostrar cargos')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
@endsection

@section('content')


<div id="container">
</div>

<script>
var TablaCargos;
</script>

<script type="text/babel" src="{{asset('rs/TablaCargos.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaCargos url="{{asset('cargos/todos')}}" refresh="100000" base="{{asset('cargos/')}}" />,
	document.getElementById('container')
);
</script>

@endsection