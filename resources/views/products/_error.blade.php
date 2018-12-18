@if(count($errors))
		<div class="alert alert-primary">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif
