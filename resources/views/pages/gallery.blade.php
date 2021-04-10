@extends('layouts.main')

@section('title', 'Gallery')

@section('content')
    <div class="services-pattern bg-gallery-pattern h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat relative flex items-center justify-center mb-56 lg:mb-80">
        <div class="container w-95% py-16 px-2 lg:p-24 absolute top-1/4 lg:top-1/2 bg-grey-light z-40">
            <div class="text-center">
                <h2 class="text-2xl text-black-light">Our Lates Cakes</h2>
                <h1 class="heading heading-line-center heading-medium text-black-DEFAULT">Gallery</h1>
                <p class="w-95% max-w-2xl m-auto text-sm md:text-base">Lorem honcus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.</p>
            </div>
        </div>
    </div>

    <div class="container flex flex-wrap justify-center sm:justify-start">
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
        <div class="service-image transition duration-200 border-white border-4 hover:border-secondary-DEFAULT overflow-hidden">
            <img class="h-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/service1.jpg')}}" alt="Images">
        </div>
    </div>

    <div class="text-center">
        <a class="mt-4 lg:mt-6 inline-block btn btn-large" href="/contact">SHOW MORE</a>
    </div>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection