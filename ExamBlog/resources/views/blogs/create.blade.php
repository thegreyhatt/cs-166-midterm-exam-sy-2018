@extends('layouts.app')

@section('content')


	{!! Form::open(['url' => 'blogs']) !!}

		{!! Form::label('title','Products:') !!}
		{!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}
		<br>

		<div class="form-group">
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description',null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('price', 'Price:') !!}
			{!! Form::textarea('description',null,['class' => 'form-control']) !!}
		</div>

		<div>
			{!! Form::label('category','Category:') !!} 

			{!! Form::select('category',array ('Drinks' => 'Drinks', 'Technology' => 'Technology', 'Appliances' => 'Appliances', 'Foods' => 'Foods', 'Lingerie' => 'Lingerie'),null, ['class' => 'form-control']) !!}
		</div>
		
		<br>
		{!! Form::submit('Add New', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

	@if($errors->has('title'))
		An error occured.
	@endif
@stop
