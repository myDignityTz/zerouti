@extends('layout')


@section('content')
    <section class="lg:px-16 px-6">
        <header class="lg:mb-12 mb-6 lg:mt-12 mt-6">
            <h1 class="text-teal-500 text-3xl font-bold text-gradient">Preventions:</h1>
        </header>

        <div class="flex lg:-mx-4">
            {{-- Navigation --}}
            <aside class="w-1/4 lg:px-4 px-6 hidden lg:block">
                <div class="shadow-xl rounded-lg overflow-hidden sticky" style="top: 30px;">
                    <div class="h-24" style="background-image: linear-gradient(359deg, hsl(0, 0%, 100%) 0%, hsl(174.5, 58.6%, 56.5%) 100%);"></div>
                    <ul class="px-6">
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#wipe_the_correct_direction">
                                <span>Wipe the correct direction</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#change_sanitary_regularly">
                                <span>Change sanitary pads regularly</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#underwear_hygiene">
                                <span>Underwear hygiene</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#drink_a_lot_of_water">
                                <span>Drink a lot of water</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider" href="#handwashing">
                                <span>Handwashing</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            {{--  Content --}}
            <div class="lg:w-3/4 lg:px-4 w-full">
                <div class="lg:px-16">
                    {{-- WIPE THE CORRECT DIRECTION --}}
                    <section class="mb-6" id="wipe_the_correct_direction">
                        <header class="mb-6">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">Wipe the correct direction</h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">Wipe from front to back.</h4>
                            <p class="mb-4">
                                The majority of cases of bladder infection or urethritis are from E. coli, the normal flora
                                that lives in your gastrointestinal tract. This helps you digest your food, but if you wipe
                                from back to front you risk smearing it to your urethral meatus. Then the bacteria can cling
                                to ther opening of the urethra, multiply and cause a UTI.
                            </p>
                        </div>
                    </section>
                    {{-- CHANGE SANITARY REGULARLY --}}
                    <section class="mb-12" id="change_sanitary_regularly">
                        <header class="mb-4 lg:pt-12 pt-6">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">Change sanitary pads regularly</h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">Women should change their menstrual pads regularly.</h4>
                            <div class="flex flex-col lg:flex-row lg:-mx-4">
                                <div class="lg:w-2/3 lg:px-4 lg:order-first order-last">
                                    <p class="mb-4">
                                        While wearing a pad or a tampon by itself does not cause a urinary tract infection, what’s
                                        going on inside or around your pad or tampon can.
                                    </p>
                                    <p class="mb-4">
                                        Pads are often made with synthetic materials. These materials can create a perfect breeding
                                        ground for bacteria as they usually have poor absorbency. Low-absorbency means that your
                                        vulva, including your urinary meatus is more likely to be exposed to the bacteria.
                                    </p>
                                    <p class="mb-4">
                                        Infection occurs when the bacteria clings to the opening of the urethra and multiplies,
                                        producing an infection of the urethra, called urethritis. The bacteria often spreads up to
                                        the bladder, causing a bladder infection, called cystitis. Untreated, the infection can
                                        continue spreading up the urinary tract, causing infection in the kidneys.
                                    </p>
                                </div>
                                <div class="lg:w-1/3 lg:px-4 px-12 lg:order-last order-first lg:mb-0 lg:mt-0 mb-8 mt-6">
                                    <img src="{{ asset('img/preventions/pads.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- UNDERWEAR HYGIENE --}}
                    <section class="mb-12" id="underwear_hygiene">
                        <header class="mb-4 lg:pt-12 pt-0">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">Underwear Hygiene</h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">Do not share underwear or wear damp underwear.</h4>
                            <p class="mb-4">
                                Sharing underwear can give you another persons bacterial infections, which means if you
                                share underwear with someone who has had the E. coli on the surface, it puts you at risk of
                                contracting UTIs..
                            </p>
                            <p class="mb-4">
                                Avoid wearing damp underwear as  warmth and moisture are a perfect breeding ground for
                                bacteria
                            </p>
                        </div>
                    </section>
                    {{-- DRINK A LOT OF WATER --}}
                    <section class="mb-12" id="drink_a_lot_of_water">
                        <header class="mb-4 lg:pt-12 pt-0">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">Drink a lot of water</h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">Drink plenty of fluids especially water.</h4>
                            <div class="flex flex-col lg:flex-row lg:-mx-4">
                                <div class="lg:w-1/2 w-full lg:px-4 order-last lg:order-first">Drinking lots of water
                                    helps in dilute your urine and ensures that you'll urinate more frequently and also
                                    this frequent urination will allow the infection bacteria to be flushed from your
                                    urinary tract before an infection can begin.
                                </div>
                                <div class="lg:w-1/2 w-full lg:px-4 order-first lg:order-last lg:mb-0 mb-6">
                                    <img src="{{ asset('img/preventions/drinkwater.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- HANDWASHING --}}
                    <section class="mb-12" id="handwashing">
                        <header class="mb-4 lg:pt-12 pt-0">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">Handwashing</h3>
                        </header>

                        <div>
                            {{-- Five steps introductions --}}
                            <div class="mb-8">
                                <h4 class="uppercase text-sm tracking-wider font-semibold mb-4 text-gray-600">Follow Five Steps to Wash Your Hands the Right Way</h4>
                                <div class="leading-loose">
                                    Washing your hands is easy, and it’s one of the most effective ways to prevent the
                                    spread of germs. Clean hands can stop germs from spreading from one person to another
                                    and throughout an entire community - from your home and workplace to childcare facilities
                                    and hospitals.
                                </div>
                            </div>

                            {{-- Five steps --}}
                            <div class="mb-12">
                                <h4 class="mb-4 text-sm uppercase tracking-wider border-b pb-6">Follow these five steps every time.</h4>
                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:w-1/4 w-full lg:pr-8 px-8">
                                        <img class="w-full" src="{{ asset('img/preventions/handwashing/wet.png') }}" alt="">
                                    </div>
                                    <div class="lg:w-3/4 w-full px-4 py-4 text-xl lg:leading-loose">
                                        <span class="text-teal-600 font-bold">Wet</span> your hands with clean, running water (warm or cold), turn off the tap, and
                                        apply soap.
                                    </div>
                                </div>

                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:order-last order-last lg:w-3/4 w-full px-4 py-4 text-xl lg:leading-loose">
                                        <span class="text-teal-600 font-bold">Scrub</span>  your hands for at least 20 seconds. Need a timer? Hum the “Happy Birthday”
                                        song from beginning to end twice.
                                    </div>
                                    <div class="lg:order-last order-first lg:w-1/4 w-full lg:pl-8 lg:px-0 px-8">
                                        <img class="w-full" src="{{ asset('img/preventions/handwashing/scrub.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:w-1/4 w-full lg:pr-8 px-8">
                                        <img class="w-full" src="{{ asset('img/preventions/handwashing/rinse.png') }}" alt="">
                                    </div>
                                    <div class="lg:w-3/4 w-full px-4 py-4 text-xl leading-loose">
                                        <span class="text-teal-600 font-bold">Rinse</span> your hands well under clean, running water.
                                    </div>
                                </div>

                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:w-3/4 lg:order-first order-last w-full px-4 py-4 text-xl lg:leading-loose leading-relaxed">
                                        <span class="text-teal-600 font-bold">Dry</span>  your hands using a clean towel or air dry them.
                                    </div>
                                    <div class="lg:w-1/4 lg:order-last order-first w-full lg:pl-8 px-8">
                                        <img class="w-full" src="{{ asset('img/preventions/handwashing/dry.png') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6 leading-loose text-lg text-gray-600">
                                You can help yourself and your loved ones stay healthy by washing your hands often,
                                especially during these key times when you are likely to get and spread germs:
                            </div>

                            {{--  Before & After --}}
                            <div class="flex lg:flex-row flex-col lg:-mx-6">
                                <div class="lg:w-1/2 w-full lg:px-6 lg:mb-0 mb-6">
                                    <h4 class="text-sm uppercase tracking-wider font-semibold border-b pb-4">Before</h4>
                                    <ul class="mt-8">
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Before, during, and after preparing food</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Before eating food</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Before and after caring for someone at home who is sick with vomiting or diarrhea</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Before and after treating a cut or wound</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lg:w-1/2 w-full lg:px-6 lg:mb-0 mb-6">
                                    <h4 class="text-sm uppercase tracking-wider font-semibold border-b pb-4">After</h4>
                                    <ul class="mt-8">
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>After using the toilet</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>After changing diapers or cleaning up a child who has used the toilet</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>After blowing your nose, coughing, or sneezing</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>After touching an animal, animal feed, or animal waste</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>After handling pet food or pet treats</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>After touching garbage</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
