@extends('layouts.main')
@section('fejlec')

    <a href="#"><img src="https://picsum.photos/65/65" style="width:65px;"
            class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
        <h1><b>{{ $photo->title }}</b></h1>
        <h5>{{ $photo->description }}</h5>
        <div class="w3-section w3-bottombar w3-padding-16">

            <a class="button gomb" href="/gallery/show/{{ $photo->gallery_id }}"><button class="w3-button w3-black">Vissza a
                    fotókhoz</button></a>

            <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>All</button>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
        </div>
    </div>

@stop

@section('tartalom')
    {{-- <div class="w3-container w3-white w3-margin-left w3-margin-right">
        <p><b>Itt készült: {{ $photo->location }}</b></p>
    </div>
    <div class="w3-container w3-padding">
        <div class="">
            <img class="w3-hover-opacity" src="/fotok/{{ $photo->gallery_id }}/{{ $photo->image }}">
        </div> --}}
    </div>

    <div class="w3-container w3-padding">
        <div class="w3-card-4" style="display:inline-block; margin: 0px auto">
            <div class="w3-container">
                <p><b>Itt készült: {{ $photo->location }}</b></p>
            </div>
            <a href="/photo/details/{{ $photo->id }}">
                <img class="" src="/fotok/{{ $photo->gallery_id }}/{{ $photo->image }}">
            </a>
        </div>
    </div>
@stop
