@extends('layouts.app')
@section('content')
<h2>Categories</h2>
<a href="{{ url('/categories/create') }}" class="btn btn-primary" role="button">Add Categories</a>
<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td> <a href="categories/{{ $category->id }}">{{ $category->name }}</a> </td>
								<td>{{ $category->description }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@stop 