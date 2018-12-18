{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex. Category Name']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			{!! Form::label('confirmed', 'Confirmed:') !!}
			{!! Form::checkbox('confirmed', '1', true) !!}
		</div>
		{!! Form::submit($btnText, ['class' => 'btn btn-primary']) !!}