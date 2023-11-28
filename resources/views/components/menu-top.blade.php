<div class="{{--uk-position-top--}}">

    {{-- МЕНЮ КОНЕЦ --}}
    <div class="uk-visible@m">
        <nav class="uk-navbar-container uk-sticky"
             data-uk-sticky="top: 50vh; animation: uk-animation-slide-top;"
             style="background: #fff; box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%) !important;">
            <div class="uk-container uk-container-large" data-uk-navbar>

                <div class="uk-navbar-left">

                    <a class="uk-navbar-item uk-logo" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34"
                             class="uk-margin-small-right uk-svg">
                            <polygon points="19.1 4.1 13.75 1 8.17 4.45 13.6 7.44 19.1 4.1" fill="#fff"></polygon>
                            <path
                                d="M21.67,5.43,16.14,8.77,22.4,12.4v9.52l-8.44,4.76L5.6,21.93V14.55L0,11.7V25.21l13.75,8.08L28,25.21V9.07Z"
                                fill="#fff"></path>
                        </svg>
                        Logo
                    </a>

                    <ul class="uk-navbar-nav">
                        <li class="<?php echo $_SERVER['REQUEST_URI'] === '/' ? 'uk-active' : ''; ?>">
                            <a href="/">{{ __('Home') }}</a>
                        </li>
                        <li>
                            <a href="#">
                                Dropdown
                                <span class="uk-icon" data-uk-icon="icon: triangle-down"></span>
                            </a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active">
                                        <a href="javascript:void(0)">Active</a>
                                    </li>
                                    <li><a href="javascript:void(0)">Item</a></li>
                                    <li><a href="javascript:void(0)">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="#modal-center" data-uk-toggle>Modal 1</a>
                        </li>
                        <li>
                            <a href="#modal-fullscreen" data-uk-toggle>Modal 2</a>
                        </li>
                    </ul>

                </div>

                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        @guest
                            <li>
                                <a href="{{-- route('login') --}}"
                                   data-uk-tooltip="title: {{ __('Login') }}; pos: bottom-left">
                                    {{ __('Login') }}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
                                    </svg>--}}
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('register') --}}"
                                   data-uk-tooltip="title: {{ __('Registration') }}; pos: bottom-left">
                                    {{ __('Registration') }}
                                    {{--<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                        <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                    </svg>--}}
                                </a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <a href="#" style="line-height: 1.25;">
                                    <span class="uk-icon-button uk-margin-small-right"
                                          data-uk-icon="icon: user; ratio: 1.25"></span>
                                    <div>
                                        {{ Auth::user()->name }}
                                        <div class="uk-navbar-subtitle"
                                             style="text-transform: none !important;">{{ Auth::user()->email }}</div>
                                    </div>
                                    <span class="uk-icon" data-uk-icon="icon: triangle-down"></span>
                                </a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav  uk-nav-parent-icon" data-uk-nav>
                                        <li class="{{ Route::is('showArticles') ? 'uk-active' : '' }}">
                                            <a href="{{ route('showArticles') }}">
                                                <span class="uk-margin-small-right"
                                                      data-uk-icon="icon: thumbnails"></span>
                                                {{ __('Articles') }}
                                            </a>
                                        </li>
                                        <li class="{{ Route::is('userProfile') ? 'uk-active' : '' }}">
                                            <a href="{{ route('userProfile') }}">
                                                <span class="uk-margin-small-right" data-uk-icon="icon: cog"></span>
                                                {{ __('Settings') }}
                                            </a>
                                        </li>
                                        <li class="uk-nav-divider"></li>
                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <span class="uk-margin-small-right"
                                                      data-uk-icon="icon: sign-out"></span>
                                                {{ __('Logout') }}
                                                {{--<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                    <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
                                                </svg>--}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    {{-- /МЕНЮ КОНЕЦ --}}

    {{-- МОБИЛЬНОЕ МЕНЮ НАЧАЛО --}}
    <div class="uk-hidden@m">
        {{--@include('includes.menu-mobile')--}}
        <x-menu-mobile></x-menu-mobile>
    </div>
    {{-- /МОБИЛЬНОЕ МЕНЮ НАЧАЛО --}}

    {{-- МЕНЮ OFFCANVAS НАЧАЛО --}}
        {{--@include('includes.menu-offcanvas')--}}
        <x-menu-offcanvas></x-menu-offcanvas>
    {{-- /МЕНЮ OFFCANVAS НАЧАЛО --}}

</div>

{{-- МОДАЛЬНОЕ ОКНО 1 --}}
    {{--@include('includes.modal-center')--}}
    <x-modal-center></x-modal-center>
{{-- /МОДАЛЬНОЕ ОКНО 1 --}}

{{-- МОДАЛЬНОЕ ОКНО 2 --}}
    {{--@include('includes.modal-fullscreen')--}}
    <x-modal-fullscreen></x-modal-fullscreen>
{{-- /МОДАЛЬНОЕ ОКНО 2 --}}
