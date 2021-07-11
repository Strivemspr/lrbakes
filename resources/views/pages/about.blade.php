@extends('layouts.main')

@section('title', 'About')

@section('content')
    <div class="relative pt-14 md:pt-28 lg:pt-48">
        <div class="services-pattern bg-about-pattern absolute top-0 left-0 right-0 w-full h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat flex items-center justify-center -z-10">   
        </div>
        <div class="flower-container container w-95% py-16 px-2 lg:p-24 bg-grey-light z-40 mb-20 md:mb-28 lg:mb-36">
            <div class="text-center">
                <img class="flower1 w-102" src="{{URL('/images/flower1.png')}}" alt="Flower">
                <img class="flower4 w-102" src="{{URL('/images/flower4.png')}}" alt="Flower">
                <h2 class="text-2xl text-black-light">About us</h2>
                <h1 class="heading heading-line-center heading-medium text-black">Who are we?</h1>
                <p class="w-95% max-w-2xl m-auto text-sm md:text-base">Lorem honcus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.</p>
            </div>
        </div>
    </div>

    <section class="container lg:flex">
        @foreach ($staff as $person)
        
        <figure class="group about-card w-auto max-w-full lg:w-1/2">
            <div class="relative">
                <div class="overflow-hidden">
                    <img class="transform transition duration-200 group-hover:scale-105 w-full" src="{{URL('/images/' . $person->bgPicture . '.jpg')}}" alt="Cake Image">
                </div>
                <div class="absolute -bottom-14 left-1/2 w-full transform -translate-x-1/2">
                    <div class="relative bg-primary transition duration-200 group-hover:bg-secondary w-3/4 mx-auto text-center px-10 pt-16 pb-5 flex flex-col justify-center items-center">
                        <img class="transform transition duration-200 group-hover:translate-y-2 absolute w-32 h-32 object-cover border-white border-4 rounded-full -top-20" src="{{URL('/images/' . $person->name . '.jpg')}}" alt="Person">
                        <h3 class="transform transition duration-200 group-hover:-translate-y-2 font-sans font-extrabold text-2xl inline-block text-white">{{ucfirst($person->name)}}</h3>
                    </div>
                </div>
            </div>
            <figcaption class="bg-grey-light pt-24 pb-12 px-8 md:px-12 text-center">{{$person->description}}</figcaption>
        </figure>

        @endforeach
    </section>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection