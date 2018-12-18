{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex. Product Name']) !!}


			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		<div class="form-group" style="width: 20%">
			{!! Form::label('wholesale_price', 'Wholesale Price:') !!}
			{!! Form::number('wholesale_price', null, ['class' => 'form-control']) !!}

			{!! Form::label('retail_price', 'Retail Price:') !!}
			{!! Form::number('retail_price', null, ['class' => 'form-control']) !!}

		</div>
		{!! Form::submit($btnText, ['class' => 'btn btn-primary']) !!}