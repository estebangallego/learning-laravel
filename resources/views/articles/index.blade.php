@extends('app')
@section('content')

	<h1>Articles</h1>
	<hr>
	@foreach ($articles as $article)

	<article>
		<h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
		<!-- <h2><a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a></h2> -->
		<div class="body">
			<p>Body: {{ $article->body }}</p>
			<p>Meta title:{{ $article->meta_title }}</p>
			<p>Meta description: {{ $article->meta_description }}</p>
			<p>Published at: {{ $article->published_at}}</p>
		</div>
	</article> 

	@endforeach
@stop