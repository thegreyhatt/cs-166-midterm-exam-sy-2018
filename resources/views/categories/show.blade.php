@extends('layouts.app')

@section('content')

	{{-- <h2>Title: {{ $category->name }}</h2> --}}

	@include('categories._error')

	{!! Form::model($category, ['method' => 'put']) !!}
		@include('categories._form', ['buttonText' => 'Save Changes'])
	{!! Form::close() !!}
@stop