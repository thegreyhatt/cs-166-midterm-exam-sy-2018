@extends('layouts.app')

@section('content')
<h2>Title: {{$categories->name}}</h2>
	@include('categories._error')
	{!! Form::model($categories, ['method' => 'put']) !!}

		@include('categories._form', ['btnText' => 'save changes'])

	{!! Form::close() !!}
@stop