@extends('layouts.main')

@section('title', 'Gallery')

@section('content')
    <div class="relative pt-14 md:pt-28 lg:pt-48">
        <div class="services-pattern bg-gallery-pattern absolute top-0 left-0 right-0 w-full h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat flex items-center justify-center -z-10">   
        </div>
        <div class="flower-container container w-95% py-16 px-2 lg:p-24 bg-grey-light z-40 mb-20 md:mb-28 lg:mb-36">
            <div class="text-center">
                <img class="flower1 w-102" src="{{URL('/images/flower1.png')}}" alt="Flower">
                <img class="flower4 w-102" src="{{URL('/images/flower4.png')}}" alt="Flower">
                <h2 class="text-2xl text-black-light">Our Latest Cakes</h2>
                <h1 class="heading heading-line-center heading-medium text-black">Gallery</h1>
                <p class="w-95% max-w-2xl m-auto text-sm md:text-base">Lorem honcus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.</p>
            </div>
        </div>
    </div>

    
    
    <div id="instagramFeed" class="container flex flex-wrap justify-center sm:justify-start gallery">
        {{-- <a href="{{URL('/images/test.jpg')}}" class="gallery service-image transition duration-200 overflow-hidden">
            <img class="h-full w-full object-cover transition duration-200 transform hover:scale-110 hover:rotate-2" src="{{URL('/images/test.jpg')}}" alt="Images">
        </a> --}}
    </div>

    <div class="text-center">
        <a id="loadMoreButton" class="loadMoreButton mt-4 lg:mt-6 inline-block btn btn-large" href="">
            LOAD MORE
        </a>
    </div>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection