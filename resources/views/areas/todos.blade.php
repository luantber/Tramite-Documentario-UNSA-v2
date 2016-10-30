@extends('template')
@section('title','Areas')

@section('content')

<div id="container"></div>

<script>
var TablaAreas;
</script>

<script type="text/babel" src="{{asset('rs/TablaAreas.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaAreas url="{{asset('areas/todos')}}" refresh="100000" />,
	document.getElementById('container')
);
</script>
@endsection()