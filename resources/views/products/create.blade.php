@extends('layouts.app')

@section('content')

	@include('products._error')

	{!! Form::open(['url' => 'products']) !!}

		@include('products._form',['buttonText' => 'Add new product'])
	{!! Form::close() !!}

@stop