<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- JavaSCript --}}
        <link defer href="{{ asset('js/app.js') }}" rel="stylesheet">
        
        {{-- CSRF-Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title --}}
        <title>{{ config('app.name', 'LrBakes') }} | @yield('title')</title>

    </head>
    <body class="antialiased">
        @include('includes.header')
        <div id="app">
            @yield('content')
        </div>
        {{-- @include('footer') --}}
    </body>
</html>
