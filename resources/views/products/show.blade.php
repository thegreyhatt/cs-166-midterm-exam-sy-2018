@extends('layouts.app')

@section('content')

	<h2>Name: {{ $product->name}}</h2>

	@include('products._error')

	{!! Form::model($product,['method' => 'put']) !!}

		@include('products._form',['buttonText' => 'Save changes'])

	{!! Form::close() !!}
@stop