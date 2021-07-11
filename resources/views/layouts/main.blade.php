<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- JavaSCript --}}    
        <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>

        {{-- CSRF-Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title --}}
        <title>{{ config('app.name', 'LrBakes') }} | @yield('title')</title>

    </head>
    <body class="antialiased preload">
        @include('includes.header')
        <div id="app">
            @yield('content')
        </div>
        @include('includes.footer')
    </body>

</html>
