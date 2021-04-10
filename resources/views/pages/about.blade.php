@extends('layouts.main')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection