{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group" >
			{!! Form::label('wholesale_price', 'Wholesale Price:') !!}
			{!! Form::text('wholesale_price', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group" >
			{!! Form::label('retail_price', 'Retail Price:') !!}
			{!! Form::text('retail_price', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category', 'Category:') !!}
		<!-- 	{!! Form::select('category[]', $categories, ['class' => 'form-control']) !!} -->

		</div>



		

{!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}