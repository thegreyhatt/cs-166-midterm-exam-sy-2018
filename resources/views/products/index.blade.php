@extends('layouts.app')

@section('content')

<h2>Products</h2>

<hr>

	@foreach($products as $product)
		<article>
			<h3> <a href="{{ url('products/'.$product->id) }}">{{ $product->name }}</a> </h3>
			<p>{{ $product->description }}</p>
			<p>{{ $product->wholesale_price }}</p>
			<p>{{ $product->retail_price }}</p>
			<a href="{{ url('categories/' .$category->name) }}"><b>{{ $product->category }}</b></a>
		</article>
	@endforeach

@stop