{!! Form::label('name', 'Category Name') !!}
{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex. Technology']) !!}

<div class="form-group" >
	{!! Form::label('description', 'Category Description') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	{!! Form::label('show/hide', 'Show:') !!}
	{!! Form::checkbox('show/hide', '1', true) !!}
</div>

{!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}

