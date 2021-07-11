<div id="newsletter" class="newsletter px-2 py-28 md:px-3 md:py-36 flex justify-center items-center bg-newsletter-pattern bg-no-repeat bg-center bg-cover">

    {{-- // Newsletter Container --}}
    <div class="relative max-w-2xl bg-white px-5 sm:px-16 py-14 md:py-20">
        <div class="bg-primary text-white text-center w-20 h-20 rounded-full absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-10 flex justify-center items-center">
            <i class="far fa-envelope fa-3x"></i>
        </div>
        <div class="text-center mb-10 md:mb-20">
            <h2 class="text-2xl text-black-light">Newsletter</h2>
            <h1 class="heading heading-line-center heading-medium text-black-DEFAULT">Monthly Updates</h1>
            <p class="w-95% max-w-md m-auto text-sm md:text-base">Sign up to stay in the loop. Receive updates, access to exclusive deals, and more.</p>
        </div>
        <form class="flex flex-col md:flex-row" action="https://tinyletter.com/Koaasy" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/Koaasy', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
            @csrf
            <input name="email" class="w-full bg-grey-dark py-3 md:py-0 px-4 focus:m-0 focus:outline-none" type="email" placeholder="Your Email">
            <button class="block btn btn-small btn-nohover hover:translate-y-0 focus:outline-none" type="submit">SUBSCRIBE</button>
        </form>
{{-- 
        @if(Session::has('newsletter-message'))
        <div class="close-section active bg-primary relative max-w-md">
            <i class="close-button fas fa-times absolute cursor-pointer p-1 text-white right-3 transform top-1/2 -translate-y-1/2"></i>
            <p class="text-white mr-5">{{Session::get('newsletter-message')}}</p>
        </div>
        @endif --}}
    </div>

    {{-- <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="https://tinyletter.com/Koaasy" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/Koaasy', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
        <p><label for="tlemail">Enter your email address</label></p>
        <p><input type="text" style="width:140px" name="email" id="tlemail" /></p>
        <input type="hidden" value="1" name="embed" />
        <input type="submit" value="Subscribe" />
        <p><a href="https://tinyletter.com" target="_blank">powered by TinyLetter</a></p>
    </form> --}}

</div>