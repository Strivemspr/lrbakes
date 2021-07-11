<div class="faq px-2 py-28 md:px-3 md:py-36 lg:py-40">
    <div class="container">
        <div class="p-5 text-xl text-white bg-primary">
            <h1>FAQ (Frequenly Asked Questions)</h1>
        </div>

        <div class="questions">
            @foreach($questions as $question)
            <div class="question">
                <div class="flex p-5 pb-2.5 items-center">
                    <div class="flex w-10 h-10 items-center justify-center">
                        <i class="fas fa-caret-right text-black-light"></i>
                    </div>
                    <h4 class="flex-grow font-bold text-black">{{$question->question}}</h4>
                    <div class="cursor-pointer arrow-button flex w-10 h-10 items-center justify-center">
                        <i class=" fas fa-chevron-down text-primary"></i>
                    </div>
                </div>
                <div class="answer font-light text-black">
                    <p>{{$question->answer}}</p> 
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>