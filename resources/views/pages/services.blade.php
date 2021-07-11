@extends('layouts.main')

@section('title', 'Services')

@section('content')

    <div class="relative pt-14 md:pt-28 lg:pt-48">
        <div class="services-pattern bg-{{$service->service}}-pattern absolute top-0 left-0 right-0 w-full h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat flex items-center justify-center -z-10">
            {{-- @if ($service->service == 'cakes')
            <div class="services-pattern bg-cakes-pattern h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat relative flex items-center justify-center mb-80 lg:mb-102">
            @elseif($service->service == 'puligi')
            <div class="services-pattern bg-puligi-pattern h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat relative flex items-center justify-center mb-80 lg:mb-102">
            @elseif($service->service == 'cheesecakes')
            <div class="services-pattern bg-cheesecakes-pattern h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat relative flex items-center justify-center mb-80 lg:mb-102">
            @elseif($service->service == 'cupcakes')
            <div class="services-pattern bg-cupcakes-pattern h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat relative flex items-center justify-center mb-80 lg:mb-102">
            @endif --}}
        </div>
        <div class="flower-container container w-95% py-16 px-2 lg:p-24 bg-grey-light z-40 mb-20 md:mb-28 lg:mb-36">
            <div class="text-center">
                <img class="flower2 w-102" src="{{URL('/images/flower3.png')}}" alt="Flower">
                <img class="flower3 w-102" src="{{URL('/images/flower2.png')}}" alt="Flower">
                <h2 class="text-2xl text-black-light">Services</h2>
                <h1 class="heading heading-line-center heading-medium text-black">{{ucfirst($service->service)}}</h1>
                <p class="w-95% max-w-2xl m-auto text-sm md:text-base">{{ucfirst($service->description)}}</p>
                <a class="mt-4 lg:mt-6 inline-block btn btn-large" href="/contact">CONTACT US</a>
            </div>
        </div>
    </div>

    <div class="container flex flex-wrap justify-center sm:justify-start">
        @foreach ($service->images as $image)
        <a href={{URL('/images/', $image)}} data-lightbox="services" class="contained-image transition duration-200 overflow-hidden">
            <img class="h-full w-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/', $image)}}" alt="{{$service->imageAlt}}">
        </a>
        @endforeach
    </div>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection