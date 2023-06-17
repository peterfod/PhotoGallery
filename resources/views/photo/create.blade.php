@extends('layouts.main')
@section('fejlec')

    <a href="#"><img src="https://picsum.photos/65/65" style="width:65px;"
            class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i
            class="fa fa-bars"></i></span>
    <div class="w3-container">
        <h1><b>Új fotó feltöltése</b></h1>
        <h5>Tölts fel egy képet!</h5>
        <div class="w3-section w3-bottombar w3-padding-16">
            <a class="button gomb" href="/gallery/show/{{ $gallery_id }}"><button class="w3-button w3-black">Vissza a fotókhoz</button></a>
            <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
            <button class="w3-button w3-white w3-hide-small"><i
                    class="fa fa-photo w3-margin-right"></i>Photos</button>
            <button class="w3-button w3-white w3-hide-small"><i
                    class="fa fa-map-pin w3-margin-right"></i>Art</button>
        </div>
    </div>
@stop

@section('tartalom')
    <div class="w3-container w3-margin w3-gray" style="max-width:500px" >
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <h5 id="contact"><b>Az új fotó adatai</b></h5>
        <hr class="w3-opacity">
        {!! Form::open(['action' => 'App\Http\Controllers\PhotoController@store', 'enctype' => 'multipart/form-data']) !!}

        {!! Form::label('cim','Cím') !!}
        {!! Form::text('cim', $value=null, $attributes=['placeholder'=>'Fotó címe', 'name'=>'cim', 'class'=>'w3-input w3-border w3-margin-bottom']) !!}

        {!! Form::label('leiras','Leírás') !!}
        {!! Form::text('leiras', $value=null, $attributes=['placeholder'=>'Fotó leírása', 'name'=>'leiras', 'class'=>'w3-input w3-border w3-margin-bottom']) !!}

        {!! Form::label('helyszin','Helyszín (ha van)') !!}
        {!! Form::text('helyszin', $value=null, $attributes=['placeholder'=>'Hol készült a fotó', 'name'=>'helyszin', 'class'=>'w3-input w3-border w3-margin-bottom']) !!}

        {!! Form::label('kep','Kép') !!}
        <br>
        {!! Form::file('kep', $attributes=['class'=>'w3-margin-bottom"']) !!}
        <br><br>
        <input type="hidden" name="galeria" value="{{ $gallery_id }}">

        {!! Form::submit('Feltöltés', $attributes=['class'=>'w3-button w3-black w3-margin-bottom']) !!}
        <br><br>
        {!! Form::close() !!}
    </div>
@stop


