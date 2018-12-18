@extends('layouts.app')

@section('content')

	@include('products._error')
	{!! Form::open(['url' => 'products']) !!}
		@include('products._form', ['btnText' => 'Add new product']);
	{!! Form::close() !!}

@stop