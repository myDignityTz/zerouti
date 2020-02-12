@extends('layout')


@section('content')
    <section class="lg:w-2/3 lg:px-0 mx-auto w-full px-6">
        <header class="lg:mb-12 lg:mt-12 mt-6 mb-6">
            <h1 class="text-teal-500 lg:text-3xl text-xl font-bold text-gradient">Kuhusu:</h1>
        </header>

        <div class="mb-12">
            <p class="lg:text-2xl text-xl font-semibold text-gray-500">
                Zero UTI aims at decreasing the spread U.T.I among girls in
                secondary schools and the entire community.
            </p>
        </div>

        <div class="mb-12">
            <iframe
                class="w-full rounded-lg shadow-lg video-height"
                src="https://www.youtube.com/embed/GFU2yQipa7o"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>

        <div class="mb-12">
            <h2 class="mb-6 text-sm uppercase tracking-wider font-semibold">Tatizo</h2>
            <p class="mb-4 lg:leading-loose lg:text-xl text-lg border-l-4 border-teal-300 pl-4">
                Watu milioni 8.1 wanaugua UTI kulingana na takwimu za WHO 2017.
            </p>
            <p class="mb-4 lg:leading-loose leading-relaxed text-lg">
                Kulingana na utafiti tuliofanya katika shule 5 za umma jijini Dar es salaam, tuligundua kuwa wasichana
                ndio kundi walioathirika zaidi na UTI kwa sababu ya vyoo ni vichache, vichafu na duni, na ukosefu wa
                mashuleni pamoja na elimu ya usafi wa kibinafsi. Hali hii inawafanya wasichana waone mara nyingi kuepuka
                kutumia vyoo siku nzima wakiwa mashuleni au wanalazimika kutumia vyoo duni. Hii imechangia wasichana
                kutokuenda shule, kuongezeka kwa idadi ya wanaoacha shule na wenye utendaji duni. Pia huwafanya wapate
                magonjwa mengine mabaya katika siku za usoni kama saratani ya shingo ya kizazi na magonjwa ya figo.
            </p>
        </div>

        <div class="mb-12 bg-gradient rounded-lg lg:py-10 py-5 lg:px-12 px-6 shadow-lg">
            <h2 class="mb-6 text-sm text-teal-900 uppercase tracking-wider font-semibold">
                Tunachofanya
            </h2>
            <p class="mb-4 leading-relaxed text-teal-900 font-bold lg:text-3xl text-xl">
                 Kupitia jukwaa hili linalotokana na wavuti tunakuza uhamasishaji kwa wanafunzi na wadau muhimu kuhusu
                usafi wa kibinafsi na hali muhimu za maji na usafi wa mazingira mashuleni. Mfumo huo pia utawaalika
                wadau mbalimbali kuboresha hali ya WASH katika shule zilizochaguliwa.
            </p>
        </div>
    </section>
@endsection
