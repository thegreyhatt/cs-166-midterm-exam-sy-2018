@extends('layouts.app')

@section('content')

<button type="button" class="btn btn-success" onclick="window.location='{{ url("products/create") }}'">Create New</button>
<hr>

	@foreach($products as $product)

		<div class="panel panel-default">
			<div class="panel-body" style="padding-top: 0px">
				<products>
				<h3><a href="{{ url('products/show/'.$product->id) }}"><b>{{ $product->title }}</b></a></h3>
				<p>{{ $product->description }}</p>
				<a href="{{ url('blogs/category/' .$blog->category) }}"><b>{{ $product->category }}</b></a>
				<br>
				<small class="text-muted"><i>Posted: {{ $product->updated_at }}</i> </small>
			</products>
			</div>
			
		</div>
	@endforeach
	
	



@stop
