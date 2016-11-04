@extends('template')

@section('title','Mostrar cargos')

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