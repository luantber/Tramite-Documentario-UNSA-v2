@extends('template')
@section('title','Estados Empleados')

@section('content')

<div id="container"></div>

<script>
var TablaEstadosTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaEstadosTramites.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaEstadosTramites url="{{asset('tramites/estados/todos')}}" refresh="100000" base = "{{asset('tramites/estados/')}}"/>,
	document.getElementById('container')
);
</script>
@endsection()