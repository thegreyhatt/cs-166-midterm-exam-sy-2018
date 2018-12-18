@extends('layouts.app')

@section('content')

{!! Form::open() !!}

		 'Blog Title:') !!}
		{!! Form::text('title', $exams->title, ['class' => 'form-control', 'placeholder' => 'New Product']) !!}

		<br>

		<div class="form-group">
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description',$exams->description,['class' => 'form-control']) !!}
		</div>

		<div>
			{!! Form::label('category','Category:') !!} 

			{!! Form::select('category',array ('Tips' => 'Tips', 'Technology' => 'Technology', 'Health' => 'Health', 'Politics' => 'Politics', 'Review' => 'Review'),$blogs->category, ['class' => 'form-control']) !!}
		</div>
		
		<br>

		{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
@stop
