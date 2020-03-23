@extends('layouts.app')

@section('content')

	<a href="/tickets">Back</a>
	<br>
	<br>

	<h3>{{$tickets->title}}</h3>
	
	<div>
		{{$tickets->body}}
	</div>
	<hr>
	<small>Posted on {{$tickets->created_at}}</small>


@endsection