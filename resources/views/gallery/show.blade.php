@extends('layouts.main')
@section('fejlec')

    <div class="w3-container">
        <h1><b>{{ $gallery->name }}</b></h1>
        <h5>{{ $gallery->description }}</h5>
        <div class="w3-section w3-bottombar w3-padding-16">
            <?php
            if (Auth::check()) {
      ?>
            <a class="button gomb" href="/photo/create/{{ $gallery->id }}"><button class="w3-button w3-black">Új fotó
                    feltöltése</button></a>
            <?php
           }
        ?>
            <a class="button gomb" href="/"><button class="w3-button w3-black">Vissza a galériákhoz</button></a>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
            <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
        </div>
    </div>

    @if (Session::has('uzenet'))
        <div class="w3-third w3-container w3-padding">
            <div class="w3-panel w3-blue w3-display-container">
                <span onclick="this.parentElement.style.display='none'"
                    class="w3-button w3-large w3-display-topright">&times;</span>
                {{-- <h3>Information!</h3> --}}
                <p>{{ Session::get('uzenet') }}</p>
            </div>
        </div>
    @endif

@stop

@section('tartalom')
    <?php
        foreach($photos as $photo) {
    ?>
        <div class="w3-third w3-container w3-padding">
            <div class="w3-card-4">
                <a href="/photo/details/{{ $photo->id }}">
                    <img src="/fotok/{{ $gallery->id }}/{{ $photo->image }}" alt="thumbnail" style="width:100%"
                        class="w3-hover-opacity">
                </a>
                <div class="w3-container">
                    <p><b>{{ $photo->title }}</b></p>
                    <p>{{ $photo->description }}</p>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
@stop
