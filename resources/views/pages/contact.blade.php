@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <div class="relative pt-14 md:pt-28 lg:pt-48">
        <div class="services-pattern bg-contact-pattern absolute top-0 left-0 right-0 w-full h-60 md:h-80 lg:h-102 bg-cover bg-center bg-no-repeat flex items-center justify-center -z-10">   
        </div>
        <div  id="contact-form"  class="container w-95% py-16 px-2 lg:p-24 bg-grey-light z-40 mb-20 md:mb-28 lg:mb-36">
            <div class="text-center">
                <h2 class="text-2xl text-black-light">Get a Quote</h2>
                <h1 class="heading heading-line-center heading-medium text-black">Contact us</h1>
                <p class="w-95% max-w-2xl m-auto text-sm md:text-base">Lorem honcus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.</p>
            </div>

            {{-- FORM --}}
            <form id="contactForm" method="POST" action="/send-email" class="mt-16 md:mt-24">
                @csrf
                {{-- ERROR --}}
                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="close-section active bg-secondary relative">
                            <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                            <p class="text-white mr-5">{{ $error }}</p>
                        </div>
                    @endforeach
                @endif --}}
                <div class="my-8">
                    <input value="{{ old('name') }}" type="text" name="name" placeholder="Name" class="w-full bg-grey-dark py-3 px-4 focus:outline-none focus:ring focus:ring-primary">
                    @error('name')
                        <div class="close-section active bg-secondary relative">
                            <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                            <p class="text-white mr-5">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <div class="flex flex-wrap md:flex-nowrap md:my-8">
                    <div class="w-full mr-0 mb-8 md:mr-8 md:mb-0">
                        <input value="{{ old('email') }}" type="email" name="email" placeholder="Email" class="w-full bg-grey-dark py-3 px-4 focus:outline-none focus:ring focus:ring-primary">
                        @error('email')
                            <div class="close-section active bg-secondary relative">
                                <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                                <p class="text-white mr-5">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="w-full">
                        <input value="{{ old('number') }}" type="tel" name="number" placeholder="Mobile Number" class="w-full bg-grey-dark py-3 px-4 focus:outline-none focus:ring focus:ring-primary">
                        @error('number')
                            <div class="close-section active bg-secondary relative">
                                <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                                <p class="text-white mr-5">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="my-8">
                    <input value="{{ old('subject') }}" type="text" name="subject" placeholder="Subject" class="w-full bg-grey-dark py-3 px-4 focus:outline-none focus:ring focus:ring-primary">
                    @error('subject')
                        <div class="close-section active bg-secondary relative">
                            <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                            <p class="text-white mr-5">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <div class="my-8">
                    <textarea name="message" placeholder="Message" class="w-full bg-grey-dark py-3 px-4 focus:outline-none focus:ring focus:ring-primary">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="close-section active bg-secondary relative">
                            <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                            <p class="text-white mr-5">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                @if(Session::has('success'))
                    <div class="close-section active bg-primary relative w-full mb-8">
                        <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
                        <p class="text-white mr-5">{{Session::get('success')}}</p>
                    </div>
                @endif 

                <button type="submit" class="contactFormButton btn btn-large block m-auto">Submit</button>
            </form>
        </div>

        <div class="px-2">
            <div class="contact-card container flex flex-col md:flex-row bg-contact-details-pattern bg-cover bg-center text-white bg-no-repeat">
                <div class=" py-10 md:py-0 contact-card-details flex-1 flex flex-col justify-center items-center h-56 z-10">
                    <i class="text-primary transition duration-200 fas fa-2x mb-2 fa-phone-alt"></i>
                    <h4>Let's Talk</h4>
                    <a href="tel:02040812239">02040812239</a>
                </div>
                <div class=" py-10 md:py-0 contact-card-details flex-1 flex flex-col justify-center items-center h-56 z-10">
                    <i class="text-primary transition duration-200 fas fa-2x mb-2 fa-map-marker-alt"></i>
                    <h4>Location</h4>
                    <a href="https://www.google.com/maps/place/Point+Cook+VIC+3030,+Australia/@-37.9053521,144.7191961,13z/data=!3m1!4b1!4m5!3m4!1s0x6ad68873e2148ac7:0x5045675218cdc90!8m2!3d-37.9178086!4d144.7477259" target="_blank">Pointcook based (Melbourne)</a>
                </div>
                <div class=" py-10 md:py-0 contact-card-details flex-1 flex flex-col justify-center items-center h-56 z-10">
                    <i class="text-primary transition duration-200 fas fa-2x mb-2 fa-envelope"></i>
                    <h4>Email us</h4>
                    <a href="mailto:hello@lrbakes">hello@lrbakes</a>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    @include('includes.faq')

    {{-- Newsletter --}}
    @include('includes.newsletter')
@endsection