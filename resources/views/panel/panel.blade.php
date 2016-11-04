@extends('template')

@section('title','Panel')

@section('content')


<div id="container"></div>

<script>
var TablaTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaTramites.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTramites url="{{asset('panel/todos')}}" refresh="50000" />,
	document.getElementById('container')
);
</script>

@endsection