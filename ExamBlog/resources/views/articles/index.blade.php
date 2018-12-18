@extends('layouts.app')

@section('content')

<h2>Articles</h2>
<hr>

	@foreach($articles as $article)
		<article>
			<h3><a href="{{ url('articles/show/'.$article->id) }}">{{$article->title}}</a></h3>
			<p>{{$article->body}}</p>
			</article>
		@endforeach
@stop