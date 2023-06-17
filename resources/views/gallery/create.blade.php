@extends('layouts.main')

@section('fejlec')

    <div class="w3-container">
        <h1><b>Új képgaléria készítése</b></h1>
        <h5>Készíts új képgalériát és töltsd fel a képeket!</h5>
        <div class="w3-section w3-bottombar w3-padding-16">
            <a class="button gomb" href="/"><button class="w3-button w3-black">Vissza a galériákhoz</button></a>
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
    <h5 id="contact"><b>Az új galéria adatai</b></h5>
    <hr class="w3-opacity">
    {!! Form::open(['action' => 'App\Http\Controllers\GalleryController@store', 'enctype' => 'multipart/form-data']) !!}

    {!! Form::label('nev','Név') !!}
    {!! Form::text('nev', $value=null, $attributes=['placeholder'=>'Galéria neve', 'name'=>'nev', 'class'=>'w3-input w3-border w3-margin-bottom']) !!}

    {!! Form::label('leiras','Leírás') !!}
    {!! Form::text('leiras', $value=null, $attributes=['placeholder'=>'Galéria leírása', 'name'=>'leiras', 'class'=>'w3-input w3-border w3-margin-bottom']) !!}

    {!! Form::label('boritokep','Borítókép') !!}
    <br>
    {!! Form::file('boritokep', $attributes=['class'=>'w3-margin-bottom"']) !!}
    <br><br>
    {!! Form::submit('Létrehozás', $attributes=['class'=>'w3-button w3-black w3-margin-bottom"']) !!}
    <br><br>

    {!! Form::close() !!}
</div>

@stop
