@extends('template')
@section('title','Estados Empleados')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
@endsection

@section('content')

<div id="container"></div>

<script>
var TablaEstadosEmpleados;
</script>

<script type="text/babel" src="{{asset('rs/TablaEstadosEmpleados.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaEstadosEmpleados url="{{asset('empleados/estados/todos')}}" refresh="100000" base = "{{asset('empleados/estados/')}}"/>,
	document.getElementById('container')
);
</script>
@endsection()