@extends('layouts.app')

@section('content')

<h2>Categories</h2>

<hr>

	@foreach($categories as $category)
		<article>
			<h3> <a href="{{ url('categories/'.$category->id) }}">{{ $category->name }}</a> </h3>
			<p>{{ $category->description }}</p>
			<p>{{ $category->show_unshow }}</p>

		</article>
@endforeach

@stop