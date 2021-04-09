@extends('layouts.main')

@section('title', 'Services')

@section('content')

    <div class="services-pattern bg-{{$service->service}}-pattern h-102 bg-cover bg-center bg-no-repeat relative flex items-center justify-center mb-44 md:mb-56 lg:mb-102">
        <div class="container w-95% py-16 px-2 lg:p-24 absolute top-1/4 lg:top-1/2 bg-grey-light z-40">
            <div class="text-center">
                <h2 class="text-2xl text-black-light">Services</h2>
                <h1 class="heading heading-line-center heading-medium text-black-DEFAULT">{{ucfirst($service->service)}}</h1>
                <p class="w-95% max-w-2xl m-auto text-sm md:text-base">{{ucfirst($service->description)}}</p>
                <a class="mt-4 lg:mt-6 inline-block btn btn-large" href="/contact">CONTACT US</a>
            </div>
        </div>
    </div>

    <div class="container flex flex-wrap justify-center sm:justify-start">
        @foreach ($service->images as $image)
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/', $image)}}" alt="{{$service->imageAlt}}">
        </div>
        @endforeach
    </div>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')

    {{-- Footer --}}
    @include('includes.footer') 

@endsection