@extends('template')

@section('title','Tramite Documentario')


@section('content')


<br>
	@if($msg)
		<div class="alert alert-success">
		  <strong>{{$msg}}</strong>  
		</div>
	@endif

@endsection