{{--@extends('layout.blank')

@section('title') Registration @endsection
@section('description') new user registration page @endsection
@section('keywords') registration @endsection

@section('main_content')--}}
<x-blank>

    <x-slot:title>
        Registration page
    </x-slot>

    <div class="uk-section uk-section-muted" style="height: 100vh;">
        <div class="uk-container uk-container-large uk-height-1-1 uk-flex uk-flex-center uk-flex-middle">

            <div class="uk-card uk-card-default uk-card-small uk-card-body" style="">
        <h3 class="uk-text-center">{{ __('Registration') }}</h3>
        <form method="post" action="{{ route('register') }}">
            @csrf

            @error('name')
            <div class="uk-alert-danger uk-margin-small" data-uk-alert>
                <a class="uk-alert-close" data-uk-close></a>
                <p>{{ $message }}</p>
            </div>
            @enderror
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-icon" data-uk-icon="icon: user"></span>
                    <label for="name"></label>
                    <input id="name" name="name" type="text" placeholder="{{ __('user name') }}" required
                           class="uk-input"
                           value="{{ old('name') }}" >
                </div>
            </div>
            @error('email')
            <div class="uk-alert-danger uk-margin-small" data-uk-alert>
                <a class="uk-alert-close" data-uk-close></a>
                <p>{{ $message }}</p>
            </div>
            @enderror
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-icon" data-uk-icon="icon: mail"></span>
                    <label for="email"></label>
                    <input id="email" name="email" type="email" placeholder="email" required
                           class="uk-input @error('email') uk-form-danger @enderror"
                           value="{{ old('email') }}" >
                </div>
            </div>
            @error('password')
            <div class="uk-alert-danger uk-margin-small" data-uk-alert>
                <a class="uk-alert-close" data-uk-close></a>
                <p>{{ $message }}</p>
            </div>
            @enderror
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-icon" data-uk-icon="icon: lock"></span>
                    <label for="password"></label>
                    <input id="password" name="password" class="uk-input" type="password" placeholder="{{ __('password') }}" required>
                </div>
            </div>
            @error('password-confirm')
            <div class="uk-alert-danger uk-margin-small" data-uk-alert>
                <a class="uk-alert-close" data-uk-close></a>
                <p>{{ $message }}</p>
            </div>
            @enderror
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-icon" data-uk-icon="icon: lock"></span>
                    <label for="password-confirm"></label>
                    <input id="password-confirm" name="password_confirmation" class="uk-input" type="password" placeholder="{{ __('confirm password') }}" required>
                </div>
            </div>
            <div class="uk-margin-small">
                <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">{{ __('Register') }}</button>
            </div>
            <div class="uk-text-small uk-text-center">
                {{ __('Already registered?') }} <a href="{{ route('login') }}">{{ __('Login') }}</a><br>
                {{--{{ __('Forgot your password?') }} <a href="{{ route('restore') }}">{{ __('Restore password') }}</a><br>--}}
                {{ __('Return to') }} <a href="{{ route('home') }}">{{ __('Home page') }}</a>
            </div>
        </form>
    </div>

        </div>
    </div>

</x-blank>
{{--@endsection--}}
