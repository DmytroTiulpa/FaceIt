<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">--}}
    <title>{{ $title ?? 'My page' }}</title>
    <meta name="author" content="Dmytro Tiulpa">

    {{-- UIkit CSS --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"/>

    {{-- UIkit JS --}}
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

    {{-- JQuery / Ajax --}}
    {{--<script src="https://code.jquery.com/jquery-latest.js"></script>--}}

    {{-- My styles & scripts --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script src="{{ asset('js/script.js') }}"></script>

    {{--<link href="/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">--}}

    {{--<style>
        @yield('css')
    </style>--}}

</head>
<body style="min-height: 100vh;">

{{ $slot }}

</body>
{{--@yield('js')--}}
</html>

