@extends('layouts.app')

@section('content')

	@include('categories._error')

	{!! Form::open(['url' => 'categories']) !!}

		@include('categories._form', ['buttonText' => 'Add New Category'])

	{!! Form::close() !!}

@stop