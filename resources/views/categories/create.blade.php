@extends('layouts.app')

@section('content')

	@include('categories._error')

	{!! Form::open(['url' => 'categories']) !!}

		@include('categories._form', ['btnText' => 'Add new category'])

	{!! Form::close() !!}

@stop