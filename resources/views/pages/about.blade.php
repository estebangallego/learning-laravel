@extends('app')

@section('content')
{{-- 	<h1>About {{ $first }} {{ $last }} </h1>
	<h2>About {!! $name !!}</h2>
	<h2>About {{ $name }}</h2>

	@if ($first == 'Esteban')
		<h1>Hello conditional {{ $first }}</h1>
	@else
		<h3>There was not conditional</h3>
	@endif --}}
	@if (count($people))
		<h3>People I Like:</h3>
		<ul>
			@foreach ($people as $person)
				<li>{{ $person }}</li>
			@endforeach
		</ul>
	@endif

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@stop