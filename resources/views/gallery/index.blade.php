{{-- alapsablonként a main.blade.php-t fogjuk használni --}}

@extends('layouts.main')

@section('fejlec')

   <div class="w3-container">
        <h1><b>Photo Gallery</b></h1>
        <h5>Laravel minta projekt</h5>
        <div class="w3-section w3-bottombar w3-padding-16">
            <button class="w3-button w3-black">ALL</button>
            <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
        </div>
    </div>
@stop

@section('tartalom')

    <?php
        foreach($galleries as $gallery) {
    ?>
    <div class="w3-third w3-container w3-padding">
        <div class="w3-card-4">
            <a href="/gallery/show/{{ $gallery->id }}">
                <img src="boritokepek/{{ $gallery->cover_image }}" alt="thumbnail" style="width:100%"
                    class="w3-hover-opacity">
            </a>
            <div class="w3-container">
                <p><b>{{ $gallery->name }}</b></p>
                <p>{{ $gallery->description }}</p>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div class="w3-container">
        <p class="w3-text-grey">Images from <a href="https://www.pexels.com" target="_blank">Pexels</a></p>
    </div>

@stop
