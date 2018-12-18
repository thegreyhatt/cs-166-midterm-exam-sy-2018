@extends('layouts.app')

@section('content')

<button type="button" class="btn btn-success" onclick="window.location='{{ url("exams/create") }}'">Create New</button>
<hr>

	@foreach($exams as $exam)

		<div class="panel panel-default">
			<div class="panel-body" style="padding-top: 0px">
				<products>
				<h3><a href="{{ url('exams/show/'.$exam->id) }}"><b>{{ $exam->name }}</b></a></h3>
				<p>{{ $exam->description }}</p>
				<p>{{$exam->wholesale_price}}</p>
				<p>{{$exam->price}}</p>

			<div class="form-group{{ }}">
                 <label for="products" class="col-md-4 control-label"></label>
                 <div class="col-md-6">

                      <select class="form-control" name="category" id="category">
                      <option value="">Select a Category</option>
			</products>
</select>
</div>
			<categories>
				<a href="{{ url('exams/category/' .$exam->category) }}"><b>{{ $exam->category }}</b></a>
				<h3><a href="{{ url('exams/show/'.$exam>id) }}"><b>{{ $exam->name }}</b></a></h3>
				<p>{{ $exam->description }}</p>
				<br>
				<small class="text-muted"><i>Posted: {{ $exam->updated_at }}</i> </small>
			</categories>
			</div>
			
		</div>
	@endforeach
	
@stop