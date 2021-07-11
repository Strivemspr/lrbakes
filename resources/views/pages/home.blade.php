@extends('layouts.main')

@section('title', 'Home')

@section('content')

    {{-- Banner --}}
    <div class="banner flex relative justify-center items-center">
        <div class="hidden xl:block flex-auto"><img class="w-full" loading="lazy" src="{{URL('/images/cake4.jpg')}}" alt="Cake"></div>
        
        <div class="hidden sm:block flex-auto"><img class="w-full" loading="lazy" src="{{URL('/images/cake5.jpg')}}" alt="Cake"></div>

        <div class="flex-auto"><img class="w-full" loading="lazy" src="{{URL('/images/cake6.jpg')}}" alt="Cake"></div>

        <div class="text-center text-white banner-text absolute w-full h-full left-0 top-0 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center m-auto">
                <p class="text-xl md:text-3xl text-grey-dark">A couple</p>
                <h1 class="heading heading-line-center heading-large">That loves to bake</h1>
                <p class="text-grey-dark w-95% max-w-md text-sm md:text-base">We specialize in baking cakes, cupcakes, desserts  and irresistible treats made to order.</p>
                <a class="mt-7 btn btn-large" href="/about">LEARN MORE</a>
                <a class="banner-arrow" href="#description"><i class="mt-8 fas fa-arrow-down fa-2x icon icon-light"></i></a>
            </div>
        </div>

    </div>

    {{-- Description --}}
    <div id="description" class="description px-2 py-28 md:px-3 md:py-32 text-center md:text-left">
        <div class="container flex flex-wrap justify-content items-center">
            <div class="md:w-4/6 md:pr-20 mb-10 md:mb-0">
                <h1 class="heading heading-line-left heading-medium text-black">Samoan Proud</h1>
                <div class="text-sm lg:text-base">
                    <p class="mb-10 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.</p>
                </div>
            </div>
            <div class="max-w-md m-auto md:w-1/3 overflow-hidden rounded-full">
                <img class="block" loading="lazy" src="{{URL('/images/cheesecake.jpg')}}" alt="Cheesecake">
            </div>
        </div>
    </div>

    {{-- Services --}}
    <div class="overflow-hidden services px-2 py-28 md:px-3 md:py-32 bg-grey relative">

        <img class="flower1 w-102" src="{{URL('/images/flower1.png')}}" alt="Flower">
        <img class="flower2 w-102" src="{{URL('/images/flower3.png')}}" alt="Flower">
        <img class="flower3 w-102" src="{{URL('/images/flower2.png')}}" alt="Flower">
        <img class="flower4 w-102" src="{{URL('/images/flower4.png')}}" alt="Flower">

        <div class="container">
            <div class="text-center mb-20">
                <h2 class="text-2xl text-black-light">Services</h2>
                <h1 class="heading heading-line-center heading-medium text-black">Baked With Love</h1>
                <p class="w-95% max-w-md m-auto text-sm md:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna</p>
            </div>
            
            <div class="relative z-20">
                {{-- Services Card --}}
                @foreach ($services as $service)
                    <div class="services-card p-3 md:bg-transparent md:p-0 flex-col md:flex-row">
                        <div class="services-card-image mb-4 md:mb-0">
                            <img class="block" src="{{URL($service->image)}}" loading="lazy" alt="{{$service->imageAlt}}">
                        </div>
                        <div class="services-card-info md:text-left flex justify-center items-center md:items-start flex-col pb-4 md:pb-0">
                            <h2 class="text-2xl lg:text-3xl text-black">{{ucfirst($service->service)}}</h2>
                            <p class="max-w-sm w-95% text-sm font-thin">{{$service->description}}</p>
                            <a class="mt-4 lg:mt-6 inline-block btn btn-large" href="/services/{{$service->service}}">LEARN MORE</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection