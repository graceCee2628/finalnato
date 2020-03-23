@extends('layouts.app')

@section('content')

	<h3>Create A Ticket</h3>
	<br>
	{!! Form::open(['action'=> 'TicketsController@store', 'method' => 'POST']) !!}

		<div class="form-group">
			{{Form::label ('title', 'Title')}}
			{{Form::select('title', ['Hardware' => 'Hardware', 'OS(Windows, Linux, Mac)' => 'OS(Windows, Linux, Mac)','Office'=>'Office','Suites'=>'Suites','Ms Office'=>'Ms Office'] ,$selected = null, ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label ('prority', 'Priority')}}
			{{Form::select('prority', ['High' => 'High', 'Low' => 'Low','Urgent'=>'Urgent'],$selected = null, ['class' => 'form-control'] )}}
		</div>
		<div class="form-group">
			{{Form::label ('description', 'Description')}}
			{{Form::textarea('description','', ['class'=>'form-control', 'placeholder'=> 'Write the description of the incident.'] )}}
		</div>
		{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}


	{!! Form::close() !!}


@endsection