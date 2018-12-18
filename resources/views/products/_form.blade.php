{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex. Product Name']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description', null, ['class' => 'form-control']) !!}

			{!! Form::label('wholesale_price', 'Wholesale Price:') !!}
			{!! Form::number('wholesale_price', null, ['class' => 'form-control']) !!}

			{!! Form::label('retail_price', 'Retail Price:') !!}
			{!! Form::number('retail_price', null, ['class' => 'form-control']) !!}

			{!! Form::label('category_id', 'Category:') !!}
				{!! Form::select('category_id', $categories, $product->category_id ?? 0,['class' => 'form-control']) !!} 
			
		</div>
		{!! Form::submit($btnText, ['class' => 'btn btn-primary']) !!}