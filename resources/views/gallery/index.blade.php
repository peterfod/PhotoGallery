{{-- alapsablonként a main.blade.php-t fogjuk használni --}}

@extends('layouts.main')

@section('tartalom')
	<div class="off-canvas-content" data-off-canvas-content>
	  <div class="title-bar hide-for-large">
		<div class="title-bar-left">
		  <button class="menu-icon" type="button" data-open="my-info"></button>
		</div>
	  </div>
		  
	  @if(Session::has('uzenet'))
	  <div class="callout success" onClick="$(this).fadeOut()">
		{{Session::get('uzenet')}}
		<button class="close-button" type="button">&times;</button>
	  </div>
	  @endif
		  
	  <div class="callout primary">
		<div class="row column">
		  <h1>Fotógaléria</h1>
		  <p class="lead">Laravel minta projekt</p>
		</div>
	  </div>
	  <div class="row small-up-2 medium-up-3 large-up-4">
		<?php
		foreach($galleries as $gallery) {
		  ?>
		  <div class="column">
			<a href="/gallery/show/{{ $gallery->id }}">
			  <img class="thumbnail" src="boritokepek/{{ $gallery->cover_image }}">
			</a>
			<h5>{{ $gallery->name }}</h5>
			<p>{{ $gallery->description }}</p>
		  </div>
		  <?php
		}
		?>
	  </div>
	</div>
@stop

