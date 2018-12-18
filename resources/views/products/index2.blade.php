@extends('layouts.app')

@section('content')

<h2>Products</h2>
<a href="{{ url('/products/create') }}" class="btn btn-primary" role="button">Add Products</a>
<hr>

	@foreach($products as $product)
		<product>
			<h3> <a href="{{ url('products/'.$product->id) }}">{{ $product->name }}</a> </h3>
			<p>{{ $product->description }}</p>
		</product>
	@endforeach

@stop