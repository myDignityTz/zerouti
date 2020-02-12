@extends('layout')

@section('content')
    <section class="lg:flex">
        <div class="w-full relative">
            <img
                class="object-cover w-full lg:h-screen"
                src="/img/cover/image01.jpg"
                alt="Cover photograph..."
            />

            <div class="lg:px-8 lg:py-16 px-4 py-8 lg:absolute right-0 lg:w-1/2 bg-white opacity-75"  style="top: 5rem; backdrop-filter: blur(10px);">
                <p class="leading-loose lg:text-2xl">
                    It's a disease that attacks the whole urine system. And this disease is caused by a lack of personal hygiene.
                    Studies show older men and women are at higher risk of developing UTI.
                    For women it is because their genitalia means the genital area is close to the area of greatest need and their urethra is shorter than that of the male.
                    For children to be left with long diapers or long underwear for urine and faeces.
                </p>
            </div>
        </div>
    </section>

    {{--  Supporters  --}}
    <section class="bg-white border-t lg:py-16 py-8">
        <div class="lg:px-16 px-4">
            <header class="mb-4">
                <h3 class="text-lg uppercase">Supporters:</h3>
            </header>
            <div class="flex lg:flex-row flex-col w-full rounded lg:py-6 lg:-mx-4">
                <div class="lg:w-1/3 w-full lg:px-4 mb-4 lg:mb-0">
                    <div class="flex items-center rounded-lg shadow-lg bg-gradient">
                        <div class="mr-6 px-4 py-4 rounded-lg bg-white">
                            <img src="{{ asset("img/logo/genu.png") }}" class="h-16" alt="Genu Logo">
                        </div>
                        <header>
                            <h4 class="text-teal-900 font-semibold text-lg mb-2">Generation Unlimited</h4>
                            <a class="flex items-center text-xs text-white uppercase tracking-wider" href="https://www.generationunlimited.org" target="_blank">
                                <span class="mr-2">Tembelea tovuti</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                </svg>
                            </a>
                        </header>
                    </div>
                </div>
                <div class="lg:w-1/3 w-full lg:px-4 mb-4 lg:mb-0">
                    <div class="flex items-center rounded-lg shadow-lg bg-gradient">
                        <div class="mr-6 px-4 py-4 rounded-lg bg-white">
                            <img src="{{ asset("img/logo/apps_and_girls.png") }}" class="h-16" alt="Genu Logo">
                        </div>
                        <header>
                            <h4 class="text-teal-900 font-semibold text-lg mb-2">Apps And Girls</h4>
                            <a class="flex items-center text-xs text-white uppercase tracking-wider" href="https://www.appsandgirls.com" target="_blank">
                                <span class="mr-2">Tembelea tovuti</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                </svg>
                            </a>
                        </header>
                    </div>
                </div>
                <div class="lg:w-1/3 w-full lg:px-4 mb-4 lg:mb-0">
                    <div class="flex items-center rounded-lg shadow-lg bg-gradient">
                        <div class="mr-6 px-4 py-4 rounded-lg bg-white">
                            <img src="{{ asset("img/logo/majisafi.png") }}" class="h-16" alt="Genu Logo">
                        </div>
                        <header>
                            <h4 class="text-teal-900 font-semibold text-lg mb-2">Maji Safi</h4>
                            <a class="flex items-center text-xs text-white uppercase tracking-wider" href="https://www.majisafigroup.org/" target="_blank">
                                <span class="mr-2">Tembelea tovuti</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-4 w-4">
                                    <path fill="none" d="M0 0h24v24H0z"/><path d="M10 6v2H5v11h11v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6zm11-3v8h-2V6.413l-7.793 7.794-1.414-1.414L17.585 5H13V3h8z"/>
                                </svg>
                            </a>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
