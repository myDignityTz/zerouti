@extends('layout')


@section('content')
    <section class="lg:px-16 px-6">
        <header class="lg:mb-12 mb-6 lg:mt-12 mt-6">
            <h1 class="text-teal-500 lg:text-3xl text-xl font-bold text-gradient">Kudhibiti:</h1>
        </header>

        <div class="flex lg:-mx-4">
            {{-- Navigation --}}
            <aside class="w-1/4 lg:px-4 px-6 hidden lg:block">
                <div class="shadow-xl rounded-lg overflow-hidden sticky" style="top: 30px;">
                    <div class="h-24" style="background-image: linear-gradient(359deg, hsl(0, 0%, 100%) 0%, hsl(174.5, 58.6%, 56.5%) 100%);"></div>
                    <ul class="px-6">
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#wipe_the_correct_direction">
                                <span>Tawaza njia sahihi</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#change_sanitary_regularly">
                                <span>Badilisha Pedi Ndani ya Muda Mfupi</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#underwear_hygiene">
                                <span>Usafi wa nguo za ndani</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider border-b border-dashed" href="#drink_a_lot_of_water">
                                <span>Kunywa Maji Mengi</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center justify-between block py-5 text-xs uppercase tracking-wider" href="#handwashing">
                                <span>Kunawa Mikono</span>
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
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">Tawaza njia sahihi</h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">
                                Jitawaze kuanzia mbele kwenda nyuma
                            </h4>
                            <p class="mb-4">
                                Mara nyingi maambukizi ya kibofu cha mkojo husababishwa na E. coli, bacteria wa kawaida
                                wanaioishi kwenye njia yako ya utumbo. Hii hukusaidia kuchimba chakula chako, lakini
                                ukifuta kutoka kwa nyuma una hatari ya kuipaka nyama yako ya urethral. Halafu bakteria
                                wanaweza kushikamana na ufunguzi wa urethra, kuzidisha na kusababisha UTI.
                            </p>
                        </div>
                    </section>
                    {{-- CHANGE SANITARY REGULARLY --}}
                    <section class="mb-12" id="change_sanitary_regularly">
                        <header class="mb-4 lg:pt-12 pt-6">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">
                                Badilisha Pedi Ndani ya Muda Mfupi
                            </h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">
                                Wanawake hupaswa kubadili pedi zao kipindi cha hedhi mara kwa mara
                            </h4>
                            <div class="flex flex-col lg:flex-row lg:-mx-4">
                                <div class="lg:w-2/3 lg:px-4 lg:order-first order-last">
                                    <p class="mb-4">
                                        Kuvaa pedi pekee hakusababishi maambukizi ya njia ya mkojo, bali kinachoendelea
                                        ndani au karibu na pedi yako huweza kusababisha maambukizi.
                                    </p>
                                    <p class="mb-4">
                                        Mara nyingi pedi hutengenezwa na vifaa vya nyuzi bandia. Vifaa hivi vinaweza
                                        kutengeneza eneo mazingira mazuri kwa bakteria kuzaliana hasa kama pedi haiwezi
                                        kufyonza damu ya hedhi vizuri. Uwezo mdogo wa pedi kufyonza damu ya hedhi
                                        huongeza uwezekano mkubwa wa sehemu zako za siri na njia ya mkojo kuwa wazi kwa
                                        bakteria.
                                    </p>
                                    <p class="mb-4">
                                        Maambukizi hutokea pale bakteria wakiwa karibu na njia ya mkojo na kuzaliana,
                                        na kusababisha maambukizi ya urethra, maarufu kama urethritis. Bakteria mara
                                        nyingi huenea hadi kwenye kibofu, na kusababisha maambukizi ya kibofu cha mkojo,
                                        maarufu kama cystitis. Bila kupata tiba, maambukizi yanaweza kuendelea kuenea
                                        kwenye njia ya mkojo, na kusababisha maambukizi katika figo.
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
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">
                                Usafi wa nguo za ndani
                            </h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">
                                Usichangie chupi na usivae chupi yenye unyevunyevu
                            </h4>
                            <p class="mb-4">
                                Kuchangia chupi kunaweza kukupa maambukizo ya bakteria ya watu wengine, hivyo basi
                                inamaanisha ikiwa ukichangia chupi na mtu mwenye bakteria wa E.coli kwenye sehemu za
                                siri, inakupa hatari ya kuambukizwa UTI.
                            </p>
                            <p class="mb-4">
                                Epuka kuvaa chupi zenye unyevunyevu kwani joto na unyevu ni mazingira mazuri wa
                                kuzaliana kwa bakteria
                            </p>
                        </div>
                    </section>
                    {{-- DRINK A LOT OF WATER --}}
                    <section class="mb-12" id="drink_a_lot_of_water">
                        <header class="mb-4 lg:pt-12 pt-0">
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">
                                Kunywa Maji Mengi
                            </h3>
                        </header>
                        <div class="text-lg lg:leading-loose leading-relaxed">
                            <h4 class="block mb-6 border-l-4 border-teal-500 pl-4 text-base text-gray-600 font-semibold font-serif">
                                Kunywa vimiminika kwa wingi hasa maji.
                            </h4>
                            <div class="flex flex-col lg:flex-row lg:-mx-4">
                                <div class="lg:w-1/2 w-full lg:px-4 order-last lg:order-first">
                                    Kunywa maji mengi husaidia kusafisha njia ya mkojo kwa kuhahakikisha kuwa uta
                                    kukojoa mara kwa mara, na hivyo itawalazimu bakteria ya maambukizi kutoka kwenye
                                    njia yako ya mkojo kabla ya kuambukizwa.
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
                            <h3 class="lg:text-2xl text-xl font-semibold text-teal-600">
                                Kunawa Mikono
                            </h3>
                        </header>

                        <div>
                            {{-- Five steps introductions --}}
                            <div class="mb-8">
                                <h4 class="uppercase text-sm tracking-wider font-semibold mb-4 text-gray-600">
                                    Hatua tano za kunawa mikono kwa usahihi
                                </h4>
                                <div class="leading-loose">
                                    Kuosha mikono yako ni rahisi, na ni njia mojawapo ya kuzuia kusambaa kwa vijidudu.
                                    Mikono safi inaweza kuzuia vijidudu kusambaa kutoka kwa mtu mmoja kwenda kwa
                                    mwingine na kwa jamii nzima — kutoka nyumbani kwako na mahali pa kazi hadi kwenye
                                    vituo vya utunzaji wa watoto na hospitali.
                                </div>
                            </div>

                            {{-- Five steps --}}
                            <div class="mb-12">
                                <h4 class="mb-4 text-sm uppercase tracking-wider border-b pb-6">
                                    Fuata hizi hatua tano kila mara
                                </h4>

                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:w-1/4 w-full lg:pr-8 px-8">
                                        <img class="w-full" src="{{ asset('img/preventions/handwashing/wet.png') }}">
                                    </div>

                                    <div class="lg:w-3/4 w-full px-4 py-4 text-xl lg:leading-loose">
                                        <span class="text-teal-600 font-bold">Lowesha</span> mikono yako na maji safi,
                                        yanayotiririka (ya joto au baridi), funga bomba, na paka sabuni.
                                    </div>
                                </div>

                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:order-last order-last lg:w-3/4 w-full px-4 py-4 text-xl lg:leading-loose">
                                        <span class="text-teal-600 font-bold">Sugua</span> mikono yako ili sabuni
                                        itengeneze povu, Sugua juu ya mikono, katikati ya vidole na chini ya kucha.
                                        Sugua mikono yako kwa kadri ya sekunde 20. Unaweza kuimba nyimbo ya happy
                                        birthday mara mbili na mda utakuwa umetimia.
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
                                        <span class="text-teal-600 font-bold">Suuza</span>  mikono yako vyema na maji
                                        safi , yanayotirirka
                                    </div>

                                </div>

                                <div class="flex lg:flex-row flex-col border-b border-dashed py-8">
                                    <div class="lg:w-3/4 lg:order-first order-last w-full px-4 py-4 text-xl lg:leading-loose leading-relaxed">
                                        <span class="text-teal-600 font-bold">Kausha</span>  mikono yako kwa taulo safi
                                        au kwa upepo
                                    </div>

                                    <div class="lg:w-1/4 lg:order-last order-first w-full lg:pl-8 px-8">
                                        <img class="w-full" src="{{ asset('img/preventions/handwashing/dry.png') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6 leading-loose text-lg text-gray-600">
                                Unaweza kuwa msaada kwako mwenyewe na wapendwa wako kuwa na afya bora kwa kuosha mikono
                                mara nyingi, haswa katika nyakati hizi muhimu ambapo kuna uwezekano wa kupata na kueneza
                                vijidudu:
                            </div>

                            {{--  Before & After --}}
                            <div class="flex lg:flex-row flex-col lg:-mx-6">
                                <div class="lg:w-1/2 w-full lg:px-6 lg:mb-0 mb-6">
                                    <h4 class="text-sm uppercase tracking-wider font-semibold border-b pb-4">Kabla</h4>
                                    <ul class="mt-8">
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Kabla na baada ya kuandaa chakula</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Kabla ya kula chakula</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Kabla na baada ya kumhudumia mgonjwa anayetapika au kuharisha</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Kabla na baada ya kuhudumia kidonda</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="lg:w-1/2 w-full lg:px-6 lg:mb-0 mb-6">
                                    <h4 class="text-sm uppercase tracking-wider font-semibold border-b pb-4">Baada</h4>
                                    <ul class="mt-8">
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Baada ya kutumia choo</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Baada ya kubadili nepi ya mtoto au kumsafisha mtoto aliyetumia choo</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Baada ya kukamua pua, kukohoa au kupiga chafya</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Baaada ya kushika mnyama, vyakula vya wanyama, au kinyesi cha wanyama</span>
                                        </li>
                                        <li class="flex mb-4">
                                            <span class="mr-4 pt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 fill-current text-teal-400">
                                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"/>
                                                </svg>
                                            </span>
                                            <span>Baada ya kushika uchafu</span>
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
