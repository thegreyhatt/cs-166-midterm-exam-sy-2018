@extends('layouts.app')

@section('content')


	{!! Form::open() !!}

		{!! Form::label('title','Blog Title:') !!}
		{!! Form::text('title',$blogs->title, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']) !!}
		<br>

		<div class="form-group">
			{!! Form::label('description', 'Body:') !!}
			{!! Form::textarea('description',$blogs->description,['class' => 'form-control']) !!}
		</div>

		<div>
			{!! Form::label('category','Category:') !!} 

		{!! Form::select('category',array ('Drinks' => 'Drinks', 'Technology' => 'Technology', 'Appliances' => 'Appliances',null, ['class' => 'form-control']) !!}
		</div>
		
		<br>

		{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
@stop
