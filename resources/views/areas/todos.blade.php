@extends('template')
@section('title','Areas')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >
@endsection


@section('content')

<script src="{{asset('js/alertify.min.js')}}"></script>

<script type="text/javascript">
console.log("here");


	alertify.success('Success message');


</script>

<div id="container"></div>

<script>
var TablaAreas;
</script>

<script type="text/babel" src="{{asset('rs/TablaAreas.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaAreas url="{{asset('areas/todos')}}" refresh="100000" base = "{{asset('areas/')}}"/>,
	document.getElementById('container')
);
</script>
@endsection()