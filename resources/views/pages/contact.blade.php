@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <h1>Contact Hello Something else</h1>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')

    {{-- Footer --}}
    @include('includes.footer') 

@endsection