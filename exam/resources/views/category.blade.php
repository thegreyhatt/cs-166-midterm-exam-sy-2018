@extends('layouts.app')

@section('content')

<!-- <button type="button" class="btn btn-success" onclick="window.location='{{ url("blogs/create") }}'">Create New</button>
<hr> -->

	@foreach($exams as $exam)

	<div class="panel panel-default">
		<div class="panel-body" style="padding-top: 0px">
			<category>
				<h3> <a href="url('exams/show/'.exam->id) }}"><b>{{ $exam->name }} </b></a></h3>
				<p>{{ $exam->description }}</p>
				<h3> <a href="url('exams/category/'.exam->category) }}"><b>{{ $exam->category}} </b></a></h3>
				<br>
				<small class="text-muted"><i>Posted: {{ $exam->updated_at }}</i></small>
			</category>
		</div>
	</div>
	@endforeach
	
	



@stop