@extends('layouts.app')

@section('content')
<h2>name: {{$product->name}}</h2>
	@include('products._error')
	{!! Form::model($product, ['method' => 'put']) !!}
		@include('products._form', ['btnText' => 'save changes']);

	{!! Form::close() !!}
@stop