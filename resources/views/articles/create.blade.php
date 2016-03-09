@extends('app')
@section('content')
	<h1>Write New Article</h1>
	<hr/>

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
		{!! Form::label('meta_description', 'Meta Description') !!}
		{!! Form::textarea('meta_description', null, ['class' => 'form-control'])  !!}
	</div>
	<div class="form-grou">
		{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control' ]) !!}
	</div>
  {!! Form::close() !!}

@stop