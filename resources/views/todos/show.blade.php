@extends('layouts.app')
@section('content')
	<a href="/" class="btn btn-primary">Go Back</a>


	<h1> {{ $todo->text }}</h1>
	<div class="label label-danger">{{ $todo->due }}</div>
	<hr>
	<p>{{ $todo->body }}</p>
	
@endsection