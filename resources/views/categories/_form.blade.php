{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

		<div class="form-group" >
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>

		<!-- {!! Form::checkbox('show/unshow', '1'); !!} -->
		{!! Form::hidden('show_unshow', '0') !!}
		{!! Form::checkbox('show_unshow', '1') !!}




{!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}