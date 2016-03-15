@extends('app')

@section('content')

<h1>Hello</h1>
{!! Form::open(array('url' => 'foo/bar')) !!}
    //
{!! Form::close() !!}
@stop


