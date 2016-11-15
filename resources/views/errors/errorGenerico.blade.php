@extends('template')

@section('title','Error')

@section('content')

<br>
	<div class="alert alert-danger">
		@if($error)
			<strong>{{$error}}</strong>
		@endif
	</div>

@endsection