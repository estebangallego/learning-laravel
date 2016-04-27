@extends('app')

@section('title', 'Edit Page')

@section('content')

	<h1>Edit: {!! $article->title !!}</h1>

	@include ('errors/list')

  {!! Form::model($article, ['method'=>'PATCH','action' => ['ArticlesController@update',$article->id]]) !!}
  	@include ('articles.partials.form', ['submitButtonText' => 'Update'])
  {!! Form::close() !!}

<?php echo Form::open(array('url' => 'foo/bar', 'method' => 'put')) ?>

@stop
