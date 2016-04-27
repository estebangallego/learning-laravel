@extends('app')
@section('title', 'Create an Article')
@section('content')
	<h1>Write New Article</h1>
	<hr/>
	
	@include ('errors.list')

  {!! Form::open(['url' => 'articles']) !!}
  	@include ('articles.partials.form', ['submitButtonText' => 'Create Article'])
  {!! Form::close() !!}

<?php echo Form::open(array('url' => 'foo/bar', 'method' => 'put')) ?>

@stop