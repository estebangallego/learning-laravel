@extends('app')
@section('title', 'Create an Article')
@section('content')
	<h1>Write New Article</h1>
	<hr/>
	

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
  {!! Form::open(['url' => 'articles']) !!}

  	<div class="form-group">
  		{!! Form::label('title', 'Title:') !!}
  		{!! Form::text('title', null, ['class' => 'form-control', 'hello' => 'test']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Body') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('meta_title', 'Meta Title') !!}
		{!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('meta_description', 'Meta Description') !!}
		{!! Form::textarea('meta_description', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-group">
		{!! Form::label('published_at', 'Publish on:') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-grou">
		{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control' ]) !!}
	</div>
  {!! Form::close() !!}

<?php echo Form::open(array('url' => 'foo/bar', 'method' => 'put')) ?>

@stop