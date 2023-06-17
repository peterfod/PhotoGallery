@extends('layouts.main')

@section('fejlec')

    <div class="w3-container">
        <h1><b>Photo Gallery</b></h1>
        <h5>Laravel minta projekt</h5>
        <div class="w3-section w3-bottombar w3-padding-16">
            <button class="w3-button w3-black">ALL</button>
            <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
            <button class="w3-button w3-white w3-hide-small"><i
                    class="fa fa-photo w3-margin-right"></i>Photos</button>
            <button class="w3-button w3-white w3-hide-small"><i
                    class="fa fa-map-pin w3-margin-right"></i>Art</button>
        </div>
    </div>
@stop

@section('tartalom')
    <div class="w3-container w3-margin w3-round-xlarge w3-border" style="max-width:500px" >
        <h4 id="contact"><b>Regisztráció</b></h4>
        {{-- <hr class="w3-opacity"> --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="w3-section">
                <x-input-label for="name" :value="__('Név')" />
                <x-text-input id="name" class="block mt-1 w-full  w3-input w3-border" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4 w3-section">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full  w3-input w3-border" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 w3-section">
                <x-input-label for="password" :value="__('Jelszó')" />

                <x-text-input id="password" class="block mt-1 w-full  w3-input w3-border"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 w3-section">
                <x-input-label for="password_confirmation" :value="__('Jelszó ismétlése')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full w3-input w3-border"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4 w3-section">
                <x-primary-button class="ml-4 w3-button w3-black w3-margin-bottom">
                    {{ __('Regisztráció') }}
                </x-primary-button>
                <br>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Már van azonosítóm, belépek') }}
                </a>
                <br>

            </div>
        </form>
    </div>

@stop



