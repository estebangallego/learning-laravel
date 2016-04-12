@extends('app')
@section('content')

	<h1>{{ $article->title }}</h1>
	<hr>
	<article>
		<div class="body">
			<p>Body: {{ $article->body }}</p>
			<p>Meta description: {{ $article->meta_description }}</p>
			<p>Published at: {{ $article->published_at}}</p>
		</div>
	</article> 

@stop