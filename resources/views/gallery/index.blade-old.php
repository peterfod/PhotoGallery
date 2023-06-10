{{-- alapsablonként a main.blade.php-t fogjuk használni --}}

@extends('layouts.main')

@section('tartalom')
	<h1>Nyitólapi üzenet: {{$teszt}}</h1>
@stop

@section('fejlec')
	<h2>Ez a fejléc</h2>
@stop