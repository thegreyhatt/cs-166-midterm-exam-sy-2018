@extends('layouts.app')

@section('content')

	@include('categories._error')

	{!! Form::open(['url' => 'categories']) !!}

		@include('categories._form',['buttonText' => 'Add new category'])
	{!! Form::close() !!}

@stop