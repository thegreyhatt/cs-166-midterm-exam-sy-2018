@extends('layouts.app')

@section('content')

<h2>Articles</h2>

<hr>

	@foreach($products as $product)
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Description</th>
								<th>Wholesale Price</th>
								<th>Retail Price</th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<td> <a href="products/{{ $product->id }}">{{ $product->name }}</a> </td>
								<td>{{ $product->description }}</td>
								<td>{{ $product->wholesale_price }}</td>
								<td>{{ $product->retail_price }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@endforeach

@stop