@extends('layouts.main')

@section('fejlec')

    <a href="#"><img src="https://picsum.photos/65/65" style="width:65px;"
            class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
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
    <div class="w3-container w3-margin w3-round-xlarge w3-border" style="max-width:500px">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />


        <h4 id="contact"><b>Bejelentkezés</b></h4>
        {{-- <hr class="w3-opacity"> --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="w3-section">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full w3-input w3-border" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 w3-section">
                <x-input-label for="password" :value="__('Jelszó')" />

                <x-text-input id="password" class="block mt-1 w-full w3-input w3-border" type="password" name="password"
                    required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 w3-section">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Emlékezz rá') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="button ml-3 w3-button w3-black w3-margin-bottom">
                    {{ __('Bejelentkezés') }}
                </x-primary-button>
                <br>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Elfelejtett jelszó') }}
                    </a>
                @endif



            </div>
            <br>
        </form>
    </div>

    <div class="w3-panel w3-teal w3-round-xlarge w3-margin" style="max-width:500px">

        {{-- <h2>Demo</h2> --}}
        <p>DEMO email: demo@demo, jelszó: demo1234</p>
    </div>

@stop
