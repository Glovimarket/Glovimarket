@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <style>
    body{
    background: -webkit-gradient(linear, left top, right top, from(#F25270), to(#049DD9));
  }
  .w-full{
      color:black;
  }

</style>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<body>
<main class="formulario-login contenedor">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('register.store') }}">
                        @csrf
	
                <div class="logoP">
             <img src="media/undraw_female_avatar_w3jk.svg" alt="">
        </div>
           <div class="logo">
             <img src="media/female_avatar_w3jk.svg" alt="">
        </div>
            <legend>Registrate</legend>

             

            <div>
                <x-jet-label for="first_name" value="Primer Nombre" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"/>
            </div>
            <div>
                <x-jet-label for="second_name" value="Segundo Nombre" />
                <x-jet-input id="second_name" class="block mt-1 w-full" type="text" name="second_name"/>
            </div>
            <div>
                <x-jet-label for="last_name" value="{{ __('Primer Apellido') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="last_name" value="Primer Apellido" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"/>
            </div>

            <div class="mt-4">
            <x-jet-label for="second_surname" value="Segundo Apellido" />
                <x-jet-input id="second_surname" class="block mt-1 w-full" type="text" name="second_surname"/>
            </div>

            <div class="mt-4">
            <x-jet-label for="telephone" value="Telefono" />
                <x-jet-input id="telephone" class="block mt-1 w-full" type="text" name="telephone"/>
            </div>

            <div class="mt-4">
            <x-jet-label for="direction" value="Direccion" />
                <x-jet-input id="direction" class="block mt-1 w-full" type="text" name="direction"/>
            </div>

            <div class="mt-4">
            <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email"/>
            </div>

            <div class="mt-4">
            <x-jet-label for="password" value="Contraseña" />
                <x-jet-input id="password" class="block mt-1 w-full" type="text" name="password"/>
            </div>
@error('first_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('second_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('last_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('second_surname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('telephone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('direction')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('password_confirmation')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4 ">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>

@endsection
